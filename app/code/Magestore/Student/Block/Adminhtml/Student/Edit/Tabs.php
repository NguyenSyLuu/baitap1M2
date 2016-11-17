<?php 

namespace Magestore\Student\Block\Adminhtml\Student\Edit;

/**
 * Tabs containerTabs
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('general_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Student Information'));
    }
}
