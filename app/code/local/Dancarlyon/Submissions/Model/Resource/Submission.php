<?php
class Dancarlyon_Submissions_Model_Resource_Submission extends Mage_Core_Model_Resource_Db_Abstract
{

    public function _construct()
    {
        $this->_init('dancarlyon_submissions/submission', 'contact_id');
    }

}
