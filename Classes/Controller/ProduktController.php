<?php

declare(strict_types=1);

namespace Myextproduct\Myextproduct\Controller;


/**
 * This file is part of the "myextproduct" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * ProduktController
 */
class ProduktController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * produktRepository
     *
     * @var \Myextproduct\Myextproduct\Domain\Repository\ProduktRepository
     */
    protected $produktRepository = null;

    /**
     * categoryRepository
     *
     * @var \Myextproduct\Myextproduct\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \Myextproduct\Myextproduct\Domain\Repository\ProduktRepository $produktRepository
     */
    public function injectProduktRepository(\Myextproduct\Myextproduct\Domain\Repository\ProduktRepository $produktRepository)
    {
        $this->produktRepository = $produktRepository;
    }

    /**
     * @param \Myextproduct\Myextproduct\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\Myextproduct\Myextproduct\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $produkts = $this->produktRepository->findAll();
        $this->view->assign('produkts', $produkts);
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Myextproduct\Myextproduct\Domain\Model\Produkt $produkt
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Myextproduct\Myextproduct\Domain\Model\Produkt $produkt): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('produkt', $produkt);
        return $this->htmlResponse();
    }

    /**
     * action filter
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function filterAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}