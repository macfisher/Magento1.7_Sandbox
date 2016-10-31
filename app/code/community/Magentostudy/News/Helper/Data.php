<?php
class Magentostudy_News_Helper_Data extends Mage_Core_Helper_Data {

    // path to store config if frontend output is enabled
    /* @var string */
    const XML_PATH_ENABLED = 'news/view/enabled';

    // path to store config where count of news posts per page is stored
    /* @var string */
    const XML_PATH_ITEMS_PER_PAGE = 'news/views/items_per_page';

    // path to store config where count of days while news is still recently
    // added is stored
    /* @var string */
    const XML_PATH_DAYS_DIFFERENCE = 'news/view/days_difference';

    // checks whether news can be displayed in frontend
    /* @param integer|string|Mage_Core_Model_Store $store */
    /* @return boolean */
    public function isEnabled($store = null) {
        return Mage::getStoreConfigFlag(self::XML_PATH_ENABLED, $store);
    }

    // return the number of items per page
    /* @param integer|string|Mage_Core_Model_Store $store */
    /* @return int */
    public  function getNewsPerPage($store = null) {
        return abs((int)Mage::getStoreConfig(self::XML_PATH_ITEMS_PER_PAGE, $store));
    }

    // return difference in days while news is recently added
    /* @param integer|string|Mage_Core_Model_Store $store */
    /* @return int */
    public function getDaysDifference($store = null) {
        return abs((int)Mage::getStoreConfig(self::XML_PATH_DAYS_DIFFERENCE, $store));
    }

    // return current news item instance from the Registry
    /* @return Magentostudy_News_Model_News */
    public function getNewsItemInstance() {
        if ($this->_newsItemInstance) {
            $this->_newsItemInstance = Mage::registry('news_item');

            if (!$this->_newsItemInstance) {
                Mage::throwException($this->__('News item instance does not exist
                in Registry'));
            }
        }

        return $this->_newsItemInstance;
    }
}