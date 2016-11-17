<?php 

namespace Magestore\Student\Model\ResourceModel;

/**
 * Resource Model Student
 */
class Student extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init('magestore_student_student','entity_id');
    }
}
