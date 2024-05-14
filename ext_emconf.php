<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage',
    'description' => 'TYPO3 Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.1.0-13.1.99',
            'fluid_styled_content' => '13.1.0-13.1.99',
            'rte_ckeditor' => '13.1.0-13.1.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HojaLatheef\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hoja Mustaffa Abdul Latheef',
    'author_email' => 'hlatheef@jweiland.net',
    'author_company' => 'Jweiland',
    'version' => '1.0.0',
];
