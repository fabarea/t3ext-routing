<?php
defined('TYPO3_MODE') || die();

$boot = function ($_EXTKEY) {
    // Register routing service
    $eIDscript = 'EXT:' . $_EXTKEY . '/Classes/Controller/EidController.php';
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include'][$_EXTKEY] = $eIDscript;
};

$boot($_EXTKEY);
unset($boot);
