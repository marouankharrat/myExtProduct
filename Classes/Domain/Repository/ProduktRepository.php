<?php

declare(strict_types=1);

namespace Myextproduct\Myextproduct\Domain\Repository;


/**
 * This file is part of the "myextproduct" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * The repository for Produkts
 */
class ProduktRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject()
    {
        $querySettings = $this->objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        /*$querySettings->setOrderings(
            [
                'name' => QueryInterface::ORDER_DESCENDING,
            ]
        );*/
        $this->setDefaultQuerySettings($querySettings);
    }
}