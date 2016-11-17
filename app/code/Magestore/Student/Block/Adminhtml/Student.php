<?php 

namespace Magestore\Student\Block\Adminhtml;

/**
 * Grid Container Student
 */
class Student extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_student';
        $this->_blockGroup = 'Magestore_Student';
        $this->_headerText = __('Student grid');
        $this->_addButtonLabel = __('Add New Student');

        parent::_construct();
    }
}
