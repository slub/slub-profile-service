<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

// Add tsconfig page
ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:slub_profile_service/Configuration/TsConfig/Page.tsconfig"'
);

// Add tsconfig user
ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:slub_profile_service/Configuration/TsConfig/User.tsconfig"'
);
