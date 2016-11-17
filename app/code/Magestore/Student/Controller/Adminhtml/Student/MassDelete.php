<?php 

namespace Magestore\Student\Controller\Adminhtml\Student;

use Magento\Framework\Controller\ResultFactory;

/**
 * Action MassDelete
 */
class MassDelete extends \Magestore\Student\Controller\Adminhtml\Student
{
    /**
     * Execute action
     */
    public function execute()
    {
        $studentIds = $this->getRequest()->getParam('students');
        if (!is_array($studentIds) || empty($studentIds)) {
            $this->messageManager->addError(__('Please select record(s).'));
        } else {
            /** @var \Magestore\Student\Model\ResourceModel\Student\Collection $collection */
            $collection = $this->_objectManager->create('Magestore\Student\Model\ResourceModel\Student\Collection');
            $collection->addFieldToFilter('student_id', ['in' => $studentIds]);
            try {
                foreach ($collection as $item) {
                    $item->delete();
                }
                $this->messageManager->addSuccess(
                    __('A total of %1 record(s) have been deleted.', count($studentIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }

        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);;

        return $resultRedirect->setPath('*/*/');
    }
}
