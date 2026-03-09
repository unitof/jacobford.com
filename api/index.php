<?php

declare(strict_types=1);

$siteRoot = dirname(__DIR__);
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$requestPath = rawurldecode($requestPath);

if (PHP_SAPI === 'cli-server') {
	$staticPath = $siteRoot . $requestPath;
	if ($requestPath !== '/' && is_file($staticPath)) {
		return false;
	}
}

$target = resolvepage($siteRoot, $requestPath);

if ($target === null) {
	http_response_code(404);
	header('Content-Type: text/plain; charset=utf-8');
	echo "Not Found\n";
	return;
}

require $target;

function resolvepage(string $siteRoot, string $requestPath): ?string {
	$normalizedPath = rtrim($requestPath, '/');
	if ($normalizedPath === '') {
		$normalizedPath = '/';
	}

	if ($normalizedPath === '/' || $normalizedPath === '/index.php') {
		return $siteRoot . '/index.php';
	}

	if ($normalizedPath === '/card' || $normalizedPath === '/card/index.php') {
		return $siteRoot . '/card/index.php';
	}

	if (preg_match('#^/projects/([^/]+)(?:/index\.php)?$#', $normalizedPath, $matches) === 1) {
		$slug = $matches[1];
		$page = $siteRoot . '/projects/' . $slug . '/index.php';
		if (is_file($page)) {
			return $page;
		}
	}

	return null;
}
