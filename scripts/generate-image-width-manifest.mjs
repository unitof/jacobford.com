import { readdirSync, readFileSync, statSync, writeFileSync } from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const siteRoot = path.dirname(__dirname);
const outputPath = path.join(siteRoot, 'php', 'generated-image-widths.php');
const supportedExtensions = new Set(['.gif', '.jpeg', '.jpg', '.png']);

const imageWidths = new Map();

walk(path.join(siteRoot, 'projects'));

const manifest = Array.from(imageWidths.entries())
	.sort(([left], [right]) => left.localeCompare(right))
	.map(([relativePath, width]) => `    ${JSON.stringify(relativePath)} => ${width},`)
	.join('\n');

const fileContents = `<?php

return [
${manifest}
];
`;

writeFileSync(outputPath, fileContents);
console.log(`Wrote ${imageWidths.size} image widths to ${path.relative(siteRoot, outputPath)}`);

function walk(directoryPath) {
	for (const entry of readdirSync(directoryPath)) {
		const entryPath = path.join(directoryPath, entry);
		const entryStat = statSync(entryPath);

		if (entryStat.isDirectory()) {
			walk(entryPath);
			continue;
		}

		if (!supportedExtensions.has(path.extname(entry).toLowerCase())) {
			continue;
		}

		const relativePath = path.relative(siteRoot, entryPath).split(path.sep).join('/');
		imageWidths.set(relativePath, imageWidth(entryPath));
	}
}

function imageWidth(filePath) {
	const buffer = readFileSync(filePath);

	if (isPng(buffer)) {
		return buffer.readUInt32BE(16);
	}

	if (isGif(buffer)) {
		return buffer.readUInt16LE(6);
	}

	if (isJpeg(buffer)) {
		return jpegWidth(buffer, filePath);
	}

	throw new Error(`Unsupported image type: ${filePath}`);
}

function isPng(buffer) {
	return buffer.length >= 24 && buffer[0] === 0x89 && buffer.toString('ascii', 1, 4) === 'PNG';
}

function isGif(buffer) {
	if (buffer.length < 10) {
		return false;
	}

	const signature = buffer.toString('ascii', 0, 6);
	return signature === 'GIF87a' || signature === 'GIF89a';
}

function isJpeg(buffer) {
	return buffer.length >= 4 && buffer[0] === 0xff && buffer[1] === 0xd8;
}

function jpegWidth(buffer, filePath) {
	let offset = 2;

	while (offset < buffer.length) {
		while (offset < buffer.length && buffer[offset] !== 0xff) {
			offset += 1;
		}

		while (offset < buffer.length && buffer[offset] === 0xff) {
			offset += 1;
		}

		if (offset >= buffer.length) {
			break;
		}

		const marker = buffer[offset];
		offset += 1;

		if (marker === 0xd9 || marker === 0xda) {
			break;
		}

		if (offset + 1 >= buffer.length) {
			break;
		}

		const segmentLength = buffer.readUInt16BE(offset);
		if (segmentLength < 2) {
			break;
		}

		if (isStartOfFrameMarker(marker)) {
			return buffer.readUInt16BE(offset + 5);
		}

		offset += segmentLength;
	}

	throw new Error(`Could not determine JPEG width for ${filePath}`);
}

function isStartOfFrameMarker(marker) {
	return [
		0xc0, 0xc1, 0xc2, 0xc3,
		0xc5, 0xc6, 0xc7,
		0xc9, 0xca, 0xcb,
		0xcd, 0xce, 0xcf,
	].includes(marker);
}
