<?php 

namespace Magestore\Student\Controller\Adminhtml\Student;

use Magento\Framework\Controller\ResultFactory;

/**
 * Action MassStatus
 */
class MassStatus extends \Magestore\Student\Controller\Adminhtml\Student
{
    /**
     * Execute action
     */
    public function execute()
    {
        $entityIds = $this->getRequest()->getParam('students');
        $status = $this->getRequest()->getParam('status');

        if (!is_array($entityIds) || empty($entityIds)) {
            $this->messageManager->addError(__('Please select record(s).'));
        } else {
            /** @var \Magestore\Student\Model\ResourceModel\Student\Collection $collection */
            $collection = $this->_objectManager->create('Magestore\Student\Model\ResourceModel\Student\Collection');
            $collection->addFieldToFilter('entity_id', ['in' => $entityIds]);
            try {
                foreach ($collection as $item) {
                    $item->setStatus($status)
                        ->setIsMassupdate(true)
                        ->save();
                }
                $this->messageManager->addSuccess(
                    __('A total of %1 record(s) have been changed status.', count($entityIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
            }
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);;

        return $resultRedirect->setPath('*/*/');
    }
}
