<?php

use Phinx\Migration\AbstractMigration;

class AdministratorTable extends AbstractMigration
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
        $table = $this->table('administrators');
        $table->addColumn('first_name','string',array('null'=>true,'limit'=>20))
            ->addColumn('last_name','string',array('null'=>true,'limit'=>20))
            ->addColumn('username','string',array('limit'=>20))
            ->addColumn('email','string',array('limit'=>20))            
            ->addColumn('password','string')
            ->addIndex(array('username','email'),array('unique'=>true))
            ->create();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}