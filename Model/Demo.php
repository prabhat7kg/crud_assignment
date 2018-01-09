<?php
namespace Assignment\Crud\Model;
class Demo extends \Magento\Framework\Model\AbstractModel implements \Assignment\Crud\Api\Data\DemoInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'assignment_crud_demo';

    protected function _construct()
    {
        $this->_init('Assignment\Crud\Model\ResourceModel\Demo');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
