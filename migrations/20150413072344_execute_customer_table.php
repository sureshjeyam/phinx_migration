<?php

use Phinx\Migration\AbstractMigration;

class ExecuteCustomerTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
        $rows = $this->query('SELECT * FROM customers');
        print_r($rows);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}