<?php
class Dancarlyon_Submissions_Model_Resource_Submission_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected $_joinedFields = array();

    protected function _construct()
    {
        parent::_construct();
        $this->_init('dancarlyon_submissions/submission');
    }


    protected function _toOptionArray($valueField='contact_id', $labelField='none', $additional=array())
    {
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }

    protected function _toOptionHash($valueField='contact_id', $labelField='none')
    {
        return parent::_toOptionHash($valueField, $labelField);
    }


    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(Zend_Db_Select::GROUP);
        return $countSelect;
    }
}
