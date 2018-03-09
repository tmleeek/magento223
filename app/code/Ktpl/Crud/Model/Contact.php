<?php

namespace Krish\Employee\Model;

use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;


class Contact extends AbstractModel
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Krish\Employee\Model\ResourceModel\Contact::class);
    }
    
}
