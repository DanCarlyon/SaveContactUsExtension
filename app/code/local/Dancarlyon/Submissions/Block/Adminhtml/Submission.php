<?php
class Dancarlyon_Submissions_Block_Adminhtml_Submission extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller         = 'adminhtml_submission';
        $this->_blockGroup         = 'dancarlyon_submissions';
        parent::__construct();
        $this->_headerText         = Mage::helper('dancarlyon_submissions')->__('Submission');
        $this->removeButton('add');

    }
}
