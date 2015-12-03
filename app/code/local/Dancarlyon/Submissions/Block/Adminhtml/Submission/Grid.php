<?php
class Dancarlyon_Submissions_Block_Adminhtml_Submission_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('submissionGrid');
        $this->setDefaultSort('contact_id');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
    }


    protected function _prepareCollection()
    {
        $collection = Mage::getModel('dancarlyon_submissions/submission')
            ->getCollection();
        
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn(
            'contact_id',
            array(
                'header' => Mage::helper('dancarlyon_submissions')->__('Id'),
                'index'  => 'contact_id',
                'type'   => 'number'
            )
        );
        $this->addColumn(
            'name',
            array(
                'header'    => Mage::helper('dancarlyon_submissions')->__('Name'),
                'align'     => 'left',
                'index'     => 'name',
            )
        );
        $this->addColumn(
            'email',
            array(
                'header'    => Mage::helper('dancarlyon_submissions')->__('Email'),
                'align'     => 'left',
                'index'     => 'email',
            )
        );
        $this->addColumn(
            'phone',
            array(
                'header'    => Mage::helper('dancarlyon_submissions')->__('Phone'),
                'align'     => 'left',
                'index'     => 'phone',
            )
        );
        $this->addColumn(
            'comments',
            array(
                'header'    => Mage::helper('dancarlyon_submissions')->__('Message'),
                'align'     => 'left',
                'index'     => 'comments',
            )
        );
        
        $this->addColumn(
            'sentat',
            array(
                'header' => Mage::helper('dancarlyon_submissions')->__('First Sent At'),
                'index'  => 'sentat',
                'width'  => '120px',
                'type'   => 'datetime',
            )
        );
        $this->addColumn(
            'resentat',
            array(
                'header'    => Mage::helper('dancarlyon_submissions')->__('Resent at'),
                'index'     => 'resentat',
                'width'     => '120px',
                'type'      => 'datetime',
            )
        );

        return parent::_prepareColumns();
    }

    /*protected function _prepareMassaction()
    {
        
    }*/

    public function getRowUrl($row)
    {
        //return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

    
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }

    protected function _afterLoadCollection()
    {
        $this->getCollection()->walk('afterLoad');
        parent::_afterLoadCollection();
    }

   
    protected function _filterStoreCondition($collection, $column)
    {
        if (!$value = $column->getFilter()->getValue()) {
            return;
        }
        $collection->addStoreFilter($value);
        return $this;
    }
}
