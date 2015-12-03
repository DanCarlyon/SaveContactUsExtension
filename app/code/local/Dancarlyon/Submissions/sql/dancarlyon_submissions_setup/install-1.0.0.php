<?php
$this->startSetup();
$table = $this->getConnection()
    ->newTable($this->getTable('dancarlyon_submissions/submission'))
    ->addColumn(
        'contact_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array(
            'identity'  => true,
            'nullable'  => false,
            'primary'   => true,
        ),
        'Submission ID'
    )
    ->addColumn(
        'name',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Contact Name'
    )
    ->addColumn(
        'email',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => false,
        ),
        'Contact Email'
    )
    ->addColumn(
        'phone',
        Varien_Db_Ddl_Table::TYPE_TEXT, 255,
        array(
            'nullable'  => true,
        ),
        'Contact Phone'
    )
    ->addColumn(
        'comments',
        Varien_Db_Ddl_Table::TYPE_TEXT,
        array(
            'nullable'  => false,
        ),
        'Comments'
    )

    ->addColumn(
        'sentat',
        Varien_Db_Ddl_Table::TYPE_DATETIME,
        null,
        array(),
        'First Sent at'
    )
    ->addColumn(
        'resentat',
        Varien_Db_Ddl_Table::TYPE_DATETIME,
        null,
        array(),
        'Resent at'
    ) 
    ->setComment('Submission Table');
$this->getConnection()->createTable($table);
$this->endSetup();
