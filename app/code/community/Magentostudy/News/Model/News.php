<?php
class Magentostudy_News_Model_News extends Mage_Core_Model_Abstract
{
    // define resource model
    protected function _construct() {
        $this->_init('magentostudy_news/news');
    }

    // if obj is new, add creation date
    protected function _beforeSave() {
        if ($this->isObjectNew()) {
            $this->setData('created_at', Varien_Date::now());
        }
        return $this;
    }
}