<?php

call_user_func(
   function ()
   {
   \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'T3docs.' . 'StoreInventory',
        'InventoryList',
        'The Store Inventory List',
        'EXT:store_inventory/Resources/Public/Icons/Extension.svg'
   );
   }
);
