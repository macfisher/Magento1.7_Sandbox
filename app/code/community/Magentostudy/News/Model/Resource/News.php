<?php
class Magentostudy_News_Model_Resource_News extends
      Mage_Core_Model_Resource_Db_Abstract
{
    // init connection and define main table and primary key
    protected function _construct() {
        $this->_init('magentostudy_news/news', 'news_id');
    }
}