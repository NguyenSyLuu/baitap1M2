<?php 

namespace Magestore\Student\Controller\Adminhtml\Student;

use Magento\Framework\Controller\ResultFactory;

/**
 * Action Grid
 */
class Grid extends \Magestore\Student\Controller\Adminhtml\Student
{
    /**
     * Execute action
     */
    public function execute()
    {
        $resultLayout = $this->resultFactory->create(ResultFactory::TYPE_LAYOUT);

        return $resultLayout;
    }
}
