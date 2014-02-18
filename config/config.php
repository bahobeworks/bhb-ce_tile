<?php

/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['bhb_tile'] = array(
	'tables' => array('tl_bhb_tile'),
	'icon'   => 'system/modules/bhb-ce_tile/assets/images/bhb.png'
);

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['bhb_tile'] = array
(
	'bhb_ce_tile'     => 'ModuleCeTile',
);
