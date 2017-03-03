<?php

class Dtn_UltraMegamenu_Model_Observer
{
	public function hookTo_CatalogCategoryFlatLoadnodesBefore(Varien_Event_Observer $observer)
	{
		$columns = array();
		$observer->getSelect()->columns(
			array('dtn_umm_dd_type', 'dtn_umm_dd_width', 'dtn_umm_dd_proportions', 'dtn_umm_dd_columns', 'dtn_umm_dd_blocks', 'dtn_umm_cat_target', 'dtn_umm_cat_label')
		);
	}
}