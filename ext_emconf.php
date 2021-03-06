<?php

/**
 * Extension Manager/Repository config file for ext "skombase".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'SKom Base Sitepackage',
    'description' => 'This is the SKom base sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Skom\\Skombase\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sven Kalbhenn',
    'author_email' => 'sven@skom.de',
    'author_company' => 'SKom',
    'version' => '11.0.0',
];
