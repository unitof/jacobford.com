import { cpSync, existsSync, mkdirSync, readdirSync, rmSync, statSync } from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const siteRoot = path.dirname(__dirname);
const staticRoot = path.join(siteRoot, '.vercel', 'output', 'static');

rmSync(staticRoot, { force: true, recursive: true });
mkdirSync(staticRoot, { recursive: true });

copyTree(path.join(siteRoot, 'css'), path.join(staticRoot, 'css'));
copyTree(path.join(siteRoot, 'type'), path.join(staticRoot, 'type'));
copyTree(path.join(siteRoot, 'projects'), path.join(staticRoot, 'projects'), { skipPhp: true });
copyFile(path.join(siteRoot, 'card', 'jacobford_resume.pdf'), path.join(staticRoot, 'card', 'jacobford_resume.pdf'));
copyFile(path.join(siteRoot, 'favicon.ico'), path.join(staticRoot, 'favicon.ico'));

console.log(`Populated ${path.relative(siteRoot, staticRoot)} with static assets`);

function copyTree(sourcePath, destinationPath, options = {}) {
	if (!existsSync(sourcePath)) {
		return;
	}

	for (const entry of readdirSync(sourcePath)) {
		if (entry === '.DS_Store') {
			continue;
		}

		const entrySourcePath = path.join(sourcePath, entry);
		const entryDestinationPath = path.join(destinationPath, entry);
		const entryStat = statSync(entrySourcePath);

		if (entryStat.isDirectory()) {
			copyTree(entrySourcePath, entryDestinationPath, options);
			continue;
		}

		if (options.skipPhp === true && path.extname(entry) === '.php') {
			continue;
		}

		copyFile(entrySourcePath, entryDestinationPath);
	}
}

function copyFile(sourcePath, destinationPath) {
	mkdirSync(path.dirname(destinationPath), { recursive: true });
	cpSync(sourcePath, destinationPath, { force: true });
}
