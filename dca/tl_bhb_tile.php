<?php


/**
 * Table tl_bhb_tile
 */
$GLOBALS['TL_DCA']['tl_bhb_tile'] = array
(

	// Config
	'config'   => array
	(
		'dataContainer'    => 'Table',
		'enableVersioning' => true,
		'sql'              => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),
	// List
	'list'     => array
	(
		'sorting'           => array
		(
			'mode'        => 2,
			'fields'      => array('title'),
			'flag'        => 1,
			'panelLayout' => 'filter;sort,search,limit'
		),
		'label'             => array
		(
			'fields' => array('title'),
			'format' => '%s',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'       => 'act=select',
				'class'      => 'header_edit_all',
				'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations'        => array
		(
			'edit'   => array
			(
				'label' => &$GLOBALS['TL_LANG']['tl_bhb_tile']['edit'],
				'href'  => 'act=edit',
				'icon'  => 'edit.gif'
			),
			'delete' => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_bhb_tile']['delete'],
				'href'       => 'act=delete',
				'icon'       => 'delete.gif',
				'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show'   => array
			(
				'label'      => &$GLOBALS['TL_LANG']['tl_bhb_tile']['show'],
				'href'       => 'act=show',
				'icon'       => 'show.gif',
				'attributes' => 'style="margin-right:3px"'
			),
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'  => array('type', 'platform', 'defineSize'),
		'default'       => '{title_legend},type,title',
		'remote'        => '{title_legend},type,title;{screencast_legend},platform',
		'remoteyoutube' => '{title_legend},type,title;{screencast_legend},platform,url,youtubeShowSuggestions,youtubeHttps,youtubeExtendedDataSecurity;{display_legend:hide},defineSize',
		'remotevimeo'   => '{title_legend},type,title;{screencast_legend},platform,url;{display_legend:hide},defineSize',
		'local'         => '{title_legend},type,title;{screencast_legend},path',
	),

	// Subpalettes
	'subpalettes' => array
	(
		'defineSize' => 'size',
	),

	// Fields
	'fields'   => array
	(
		'id'     => array
		(
			'sql' => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'type'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['type'],
			'inputType' => 'select',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
			'options'   => array('remote', 'local'),
			'reference' => &$GLOBALS['TL_LANG']['tl_bhb_tile'],
			'eval'      => array(
				'includeBlankOption' => true,
				'submitOnChange'     => true,
				'mandatory'          => true,
				'tl_class'           => 'w50',
			),
			'sql'       => "varchar(10) NOT NULL default ''"
		),
		'title'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['title'],
			'inputType' => 'text',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
			'search'    => true,
			'eval'      => array(
				'mandatory' => true,
				'unique'    => true,
				'maxlength' => 255,
				'tl_class'  => 'w50'
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'platform'  => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['platform'],
			'inputType' => 'select',
			'exclude'   => true,
			'sorting'   => true,
			'flag'      => 1,
			'options'   => array('youtube', 'vimeo'),
			'reference' => &$GLOBALS['TL_LANG']['tl_bhb_tile'],
			'eval'      => array(
				'includeBlankOption' => true,
				'submitOnChange'     => true,
				'mandatory'          => true,
				'tl_class'           => 'w50',
			),
			'sql'       => "varchar(10) NOT NULL default ''"
		),
		'url'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['url'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array(
				'tl_class' => 'w50'
			),
			'sql'       => "text NULL"
		),
		'path'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['path'],
			'inputType' => 'fileTree',
			'exclude'   => true,
			'eval'      => array('files' => true, 'filesOnly' => true, 'fieldType' => 'radio'),
			'sql'       => "text NULL",
		),
		'youtubeShowSuggestions'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['youtubeShowSuggestions'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array(
				'tl_class' => 'w50 m12'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'youtubeHttps'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['youtubeHttps'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array(
				'tl_class' => 'w50 m12'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'youtubeExtendedDataSecurity'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['youtubeExtendedDataSecurity'],
			'inputType' => 'checkbox',
			'exclude'   => true,
			'eval'      => array(
				'tl_class' => 'w50 m12'
			),
			'sql'       => "char(1) NOT NULL default ''"
		),
		'defineSize'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['defineSize'],
			'inputType' => 'select',
			'exclude'   => true,
			'options'   => array('640x480', 'custom'),
			'eval'      => array(
				'submitOnChange' => true,
				'tl_class'       => 'clr w50 m12'
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
		'size'    => array
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_bhb_tile']['size'],
			'inputType' => 'text',
			'exclude'   => true,
			'eval'      => array(
				'multiple' => true,
				'size'     => 2,
				'tl_class' => 'w50'
			),
			'sql'       => "varchar(255) NOT NULL default ''"
		),
	)
);
