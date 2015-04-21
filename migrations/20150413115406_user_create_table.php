<?php

use Phinx\Migration\AbstractMigration;

class UserCreateTable extends AbstractMigration
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
        $table = $this->table('customer_log');
        $table->addColumn('customer_id','integer')
            ->addColumn('activities','string')
            ->addColumn('created','datetime')        
            ->addColumn('modified','datetime')
            ->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}