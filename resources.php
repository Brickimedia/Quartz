<?php
$wgResourceModules['skins.quartz'] = array(
    'styles' => array(
        "$IP/skins/common/commonElements.css" => array( 'media' => 'screen' ),
        "$IP/skins/common/commonContent.css" => array( 'media' => 'screen' ),
        "$IP/skins/common/commonInterface.css" => array( 'media' => 'screen' ),
        "$IP/skins/quartz/screen.css" => array( 'media' => 'screen' ),
    ),
    'scripts' => array(
    	"$IP/skins/quartz/quartz.js",
    	"$IP/skins/common/foes.js",
    ),
    'remoteBasePath' => $GLOBALS['wgStylePath'],
    'localBasePath' => $GLOBALS['wgStyleDirectory']
);