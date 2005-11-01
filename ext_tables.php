<?php
/* $Id$ */
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

t3lib_extMgm::addService($_EXTKEY,  'staticUpload' /* sv type */,  'tx_dkdstaticuploadwinscp_sv1' /* sv key */,
		array(

			'title' => 'staticUpload: WINSCP',
			'description' => 'Uses WINSCP.',

			'subtype' => 'scp',

			'available' => TRUE,
			'priority' => 50,
			'quality' => 50,

			'os' => 'win',
			'exec' => 'winscp3',

			'classFile' => t3lib_extMgm::extPath($_EXTKEY).'sv1/class.tx_dkdstaticuploadwinscp_sv1.php',
			'className' => 'tx_dkdstaticuploadwinscp_sv1',
		)
	);
?>