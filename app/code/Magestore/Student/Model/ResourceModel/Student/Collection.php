<?php 

namespace Magestore\Student\Model\ResourceModel\Student;

/**
 * Collection Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init('Magestore\Student\Model\Student','Magestore\Student\Model\ResourceModel\Student');
    }
}
