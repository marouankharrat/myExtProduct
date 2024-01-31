<?php
defined('TYPO3') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Myextproduct',
    'Produktlist',
    'produktList'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Myextproduct',
    'Produktfilter',
    'produktFilter'
);