<?php
/**
 * News data installation script
 *
 * @author Magento
 */

/**
 * @var $installer Mage_Core_Model_Resource_Setup
 */
$installer = $this;

/**
 * @var $model Magentostudy_News_Model_News
 */
$model = Mage::getModel('magentostudy_news/news');

// Set up data rows
$dataRows = array(
    array(
        'title'        => 'Example Blog #1',
        'author'       => 'Mackenzie Fisher',
        'published_at' => '2016-12-20',
        'content'      => 'This is a test for producing content 
        for the first blog article content.
        <p>This is a test HTML paragraph</p>
        <h1>This is an H1 HTML tag test</h1>'
    ),
    array(
        'title'        => 'Example Blog #2',
        'author'       => 'Luigi Vampa',
        'published_at' => '1836-7-30',
        'content'      => 'Letter has been sent. Awaiting exchange...'
    ),
    array(
        'title'         => 'Example Blog #3',
        'author'        => 'Drazhar Tekken`Dius',
        'published_at'  => '40256-1-10',
        'content'       => 'Death to Space Orks!'
    )
);

// Generate news items
foreach ($dataRows as $data) {
    $model->setData($data)->setOrigData()->save();
}