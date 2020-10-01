<?php
namespace Vky\Test\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('customer_details', 'cust_id');   //here "customer_details" is table name and "cust_id" is the primary key of custom table
    }
}