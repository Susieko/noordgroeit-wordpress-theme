<?php
/**
 * Rebuild style.css from the CSS source modules in their explicit cascade order.
 *
 * The filenames are descriptive; this list is the single source of truth for
 * ordering so CSS cascade behavior does not depend on numeric filename prefixes.
 *
 * Usage from the theme root:
 *     php tools/build-css.php
 */

$themeRoot = dirname(__DIR__);
$sourceDir = $themeRoot . '/assets/css/source';
$output    = $themeRoot . '/style.css';

$modules = [
    'foundation-shared.css',
    'over-noordgroeit.css',
    'finance.css',
    'team-bestuur.css',
    'initiatieven.css',
    'noordbuiten-core.css',
    'noordbuiten-activiteiten.css',
    'noordbuiten-bezoeken-shared.css',
    'nieuws-agenda.css',
    'doe-mee.css',
    'vrijwilliger-worden.css',
    'samenwerken.css',
    'vacatures.css',
    'steun-shared-polish.css',
    'shared-polish-motion.css',
    'shared-hero-initiatieven-noordwerktsamen.css',
    'heikantse-noordbuiten-motion.css',
    'single-content-page-motion.css',
    'steun-samenwerken-polish.css',
];

$css = '';

foreach ($modules as $module) {
    $file = $sourceDir . '/' . $module;

    if (!is_file($file)) {
        fwrite(STDERR, "Missing CSS module: {$module}\n");
        exit(1);
    }

    $contents = file_get_contents($file);

    if ($contents === false) {
        fwrite(STDERR, "Could not read: {$file}\n");
        exit(1);
    }

    $css .= $contents;
    fwrite(STDOUT, "✓ {$module}\n");
}

if (file_put_contents($output, $css) === false) {
    fwrite(STDERR, "Could not write style.css.\n");
    exit(1);
}

fwrite(
    STDOUT,
    'Built style.css from ' . count($modules) . " modules.\n"
);
