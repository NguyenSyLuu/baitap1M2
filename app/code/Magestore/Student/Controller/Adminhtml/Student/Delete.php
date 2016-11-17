<?php 

namespace Magestore\Student\Controller\Adminhtml\Student;

use Magento\Framework\Controller\ResultFactory;

/**
 * Action Delete
 */
class Delete extends \Magestore\Student\Controller\Adminhtml\Student
{
    /**
     * Execute action
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('entity_id');
        try {
            /** @var \{{model_name}} $model */
            $model = $this->_objectManager->create('Magestore\Student\Model\Student')->setId($id);
            $model->delete();
            $this->messageManager->addSuccess(
                __('Delete successfully !')
            );
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        return $resultRedirect->setPath('*/*/');
    }
}
