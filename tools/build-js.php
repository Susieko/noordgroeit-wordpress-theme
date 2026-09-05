<?php
/**
 * Rebuild assets/js/site.js from the JavaScript source modules.
 *
 * Module order is explicit here so filenames can stay descriptive.
 *
 * Usage from the theme root:
 *     php tools/build-js.php
 */

$themeRoot = dirname(__DIR__);
$sourceDir = $themeRoot . '/assets/js/source';
$output    = $themeRoot . '/assets/js/site.js';

$modules = [
    'site-header.js',
    'shared-observers.js',
    'home-interactions.js',
    'home-motion.js',
    'over-noordgroeit.js',
    'team-bestuur.js',
    'finance.js',
    'initiatieven.js',
    'noordwerktsamen.js',
    'noordbuiten.js',
    'noordbuiten-activiteiten.js',
    'noordbuiten-meedoen.js',
    'noordbuiten-bezoeken.js',
    'single-content.js',
    'nieuws-agenda.js',
    'doe-mee.js',
    'vrijwilliger-worden.js',
    'contact.js',
    'vacatures.js',
    'steun-noordgroeit.js',
    'samenwerken.js',
];

$javascript = '';

foreach ($modules as $module) {
    $file = $sourceDir . '/' . $module;

    if (!is_file($file)) {
        fwrite(STDERR, "Missing JavaScript module: {$module}\n");
        exit(1);
    }

    $contents = file_get_contents($file);

    if ($contents === false) {
        fwrite(STDERR, "Could not read: {$file}\n");
        exit(1);
    }

    $javascript .= $contents;
    fwrite(STDOUT, "✓ {$module}\n");
}

if (file_put_contents($output, $javascript) === false) {
    fwrite(STDERR, "Could not write assets/js/site.js.\n");
    exit(1);
}

fwrite(
    STDOUT,
    'Built assets/js/site.js from ' . count($modules) . " modules.\n"
);
