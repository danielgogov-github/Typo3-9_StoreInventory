<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'T3docs.' . 'store_inventory',
    'my',
    '',
    '',
    [],
    [
        'access' => 'admin',
        'icon' => 'EXT:store_inventory/Resources/Public/Icons/module.svg',
        'labels' => 'LLL:EXT:store_inventory/Resources/Private/Language/module.xlf'
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'T3docs.' . 'store_inventory',
    'my',
    'storeInventory',
    '',
    [
        'StoreInventory' => 'list',
    ],
    [
        'access' => 'admin',
        'icon' => 'EXT:store_inventory/Resources/Public/Icons/module_storeInventory.svg',
        'labels' => 'LLL:EXT:store_inventory/Resources/Private/Language/locallang_db.xlf'
    ]
);
