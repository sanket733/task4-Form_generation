<?php
namespace Vky\Test\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Vky\Test\Model\ResourceModel\Test');
    }
}