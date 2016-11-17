<?php 

namespace Magestore\Student\Controller\Adminhtml\Student;

use Magento\Framework\Controller\ResultFactory;

/**
 * Action Edit
 */
class Edit extends \Magestore\Student\Controller\Adminhtml\Student
{
    /**
     * Execute action
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('student_id');
        $model = $this->_objectManager->create('Magestore\Student\Model\Student');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

                return $resultRedirect->setPath('*/*/');
            }
        }

        $data = $this->_getSession()->getFormData(true);
        if (!empty($data)) {
            $model->setData($data);
        }

        $this->_objectManager->get('Magento\Framework\Registry')->register('registry_model', $model);

        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Magestore_Student::magestorestudent');
        return $resultPage;
    }
}
