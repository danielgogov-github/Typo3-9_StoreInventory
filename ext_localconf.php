<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'T3docs.' . 'StoreInventory',
    'InventoryList',
    [
        'StoreInventory' => 'list',
    ],
    // non-cacheable actions
    [
        'StoreInventory' => '',
    ],
);
