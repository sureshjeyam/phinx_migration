<?php

use Phinx\Migration\AbstractMigration;

class PhinxMigrateTable extends AbstractMigration
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
    public function change()
    {
        $table = $this->table('test_users');
        $table->addColumn('username','string')
            ->addColumn('email','string')
            ->addColumn('password','string')
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