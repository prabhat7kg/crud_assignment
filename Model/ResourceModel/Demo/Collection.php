<?php
namespace Assignment\Crud\Model\ResourceModel\Demo;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Assignment\Crud\Model\Demo','Assignment\Crud\Model\ResourceModel\Demo');
    }
}
