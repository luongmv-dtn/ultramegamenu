<?php

class Dtn_UltraMegamenu_Helper_Cssgen extends Mage_Core_Helper_Abstract
{
	/**
	 * Path and directory of the automatically generated CSS
	 *
	 * @var string
	 */
	protected $_generatedCssFolder;

	
	public function __construct()
	{
		//Create paths
		$this->_generatedCssFolder = 'css/_config/';

	}
	

	/**
	 * Get file path: CSS grid
	 *
	 * @return string
	 */
	public function getGridFile()
	{
		return $this->_generatedCssFolder . 'grid_' . Mage::app()->getStore()->getCode() . '.css';
	}
	
	/**
	 * Get file path: CSS layout
	 *
	 * @return string
	 */
	public function getLayoutFile()
	{
		return $this->_generatedCssFolder . 'layout_' . Mage::app()->getStore()->getCode() . '.css';
	}
	
	/**
	 * Get file path: CSS design
	 *
	 * @return string
	 */
	public function getDesignFile()
	{
		return $this->_generatedCssFolder . 'design_' . Mage::app()->getStore()->getCode() . '.css';
	}
}
