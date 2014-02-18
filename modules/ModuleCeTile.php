<?php

class ModuleCeTile extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_bhb_tile';

	/**
	 * Compile the current element
	 */
	protected function compile()
	{
		$this->loadLanguageFile('tl_bhb_tile');

		$typeFilter = '';

		$whereSql = array();
		$queryArgs = array();

		if ($this->screencast_filter_type) {
			$typeFilter = $this->screencast_filter_type;
		}
		else if (\Input::get('type')) {
			$typeFilter = \Input::get('type');
		}

		if ($typeFilter) {
			$whereSql[] = 'type=?';
			$queryArgs[] = $typeFilter;
		}

		/** @var \Contao\Database\Result $rs */
		$rs = Database::getInstance()
			->prepare('SELECT * FROM tl_bhb_tile ' . (count($whereSql) ? 'WHERE ' . implode('AND', $whereSql) : '') . ' ORDER BY title')
			->execute($queryArgs);

		$this->Template->screencasts = $rs->fetchAllAssoc();
		$this->Template->filterByType = !$this->screencast_filter_type;
		$this->Template->typeFilter   = $typeFilter;
	}
}
