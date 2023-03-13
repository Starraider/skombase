<?php

/*
 * Copyright by Sven Kalbhenn (sven@skom.de).
 * See LICENSE that was shipped with this package.
 */

defined('TYPO3') or die('Access denied.');
$GLOBALS['TCA']['tt_content']['columns']['background_video'] = [
    'exclude' => true,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => 'LLL:EXT:skombase/Resources/Private/Language/locallang_be.xlf:field.background_video',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
        'background_video',
        [
            'appearance' => [
                'createNewRelationLinkTitle' => 'LLL:EXT:skombase/Resources/Private/Language/locallang_be.xlf:field.select_background_video'
            ],
            'overrideChildTca' => [

            ],
            'minitems' => 0,
            'maxitems' => 1,
        ],
        'mp4,mov,webm'
    ),
    'l10n_mode' => 'exclude',
];


$GLOBALS['TCA']['tt_content']['columns']['padding_top'] = [
    'exclude' => true,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.padding_top',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['default', 'default'],
            ['extra-small', 'extra-small'],
            ['small', 'small'],
            ['medium', 'medium'],
            ['large', 'large'],
            ['extra-large', 'extra-large']
        ]
    ],
    'l10n_mode' => 'exclude',
];
$GLOBALS['TCA']['tt_content']['columns']['padding_top']['onChange'] = 'reload';
$GLOBALS['TCA']['tt_content']['columns']['padding_bottom'] = [
    'exclude' => true,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.padding_bottom',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['default', 'default'],
            ['extra-small', 'extra-small'],
            ['small', 'small'],
            ['medium', 'medium'],
            ['large', 'large'],
            ['extra-large', 'extra-large']
        ]
    ],
    'l10n_mode' => 'exclude',
];
$GLOBALS['TCA']['tt_content']['columns']['padding_bottom']['onChange'] = 'reload';

// Add fields to default palettes
$GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] .= '
    --linebreak--,
    background_video,
    --linebreak--,
    padding_top,
    padding_bottom
';
