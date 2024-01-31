<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myextproduct_domain_model_produkt', 'EXT:myextproduct/Resources/Private/Language/locallang_csh_tx_myextproduct_domain_model_produkt.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myextproduct_domain_model_produkt');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myextproduct_domain_model_category', 'EXT:myextproduct/Resources/Private/Language/locallang_csh_tx_myextproduct_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myextproduct_domain_model_category');
})();
