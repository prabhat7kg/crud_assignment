<?php
namespace Assignment\Crud\Model\ResourceModel;
class Demo extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('assignment_crud_demo','assignment_crud_demo_id');
    }
}
