<?php

namespace T3docs\StoreInventory\Controller;

use T3docs\StoreInventory\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class StoreInventoryController extends ActionController
{
    private $productRepository;

    /**
     * Inject the product repository
     *
     * @param \MyVendor\StoreInventory\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }
}
