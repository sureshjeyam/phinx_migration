<?php

use Phinx\Migration\AbstractMigration;

class RemoveIndexTable extends AbstractMigration
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
        $table->removeIndex(array('password'));
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}