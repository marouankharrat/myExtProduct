<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Myextproduct',
        'Produktlist',
        [
            \Myextproduct\Myextproduct\Controller\ProduktController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Myextproduct\Myextproduct\Controller\ProduktController::class => 'list, show'
        ]
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Myextproduct',
        'Produktfilter',
        [
            \Myextproduct\Myextproduct\Controller\ProduktController::class => 'filter'
        ],
        // non-cacheable actions
        [
            \Myextproduct\Myextproduct\Controller\ProduktController::class => 'filter'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    produktlist {
                        iconIdentifier = myextproduct-plugin-produktlist
                        title = LLL:EXT:myextproduct/Resources/Private/Language/locallang_db.xlf:tx_myextproduct_produktlist.name
                        description = LLL:EXT:myextproduct/Resources/Private/Language/locallang_db.xlf:tx_myextproduct_produktlist.description
                        tt_content_defValues {
                            CType = list
                            list_type = myextproduct_produktlist
                        }
                    }
                    produktfilter {
                        iconIdentifier = myextproduct-plugin-produktfilter
                        title = LLL:EXT:myextproduct/Resources/Private/Language/locallang_db.xlf:tx_myextproduct_produktfilter.name
                        description = LLL:EXT:myextproduct/Resources/Private/Language/locallang_db.xlf:tx_myextproduct_produktfilter.description
                        tt_content_defValues {
                            CType = list
                            list_type = myextproduct_produktfilter
                        }
                    }

                }
                show = *
            }
       }'
    );
})();