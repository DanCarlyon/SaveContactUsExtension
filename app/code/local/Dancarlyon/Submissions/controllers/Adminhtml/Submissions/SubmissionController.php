<?php
class Dancarlyon_Submissions_Adminhtml_Submissions_SubmissionController extends Dancarlyon_Submissions_Controller_Adminhtml_Submissions
{

    protected function _initSubmission()
    {
        $submissionId  = (int) $this->getRequest()->getParam('contact_id');
        $submission    = Mage::getModel('dancarlyon_submissions/submission');
        if ($submissionId) {
            $submission->load($submissionId);
        }
        Mage::register('current_submission', $submission);
        return $submission;
    }


    public function indexAction()
    {
        $this->loadLayout();
        $this->_title(Mage::helper('dancarlyon_submissions')->__('Contact Form Submissions'))
             ->_title(Mage::helper('dancarlyon_submissions')->__('Submissions'));
        $this->renderLayout();
    }


    public function gridAction()
    {
        $this->loadLayout()->renderLayout();
    }
    
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('dancarlyon_submissions/submission');
    }
}
