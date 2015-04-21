<?php

use Phinx\Migration\AbstractMigration;

class FetchCustomerTable extends AbstractMigration
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
        $row = $this->fetchRow('SELECT * FROM customers'); // It will fetch only first row from the table
        print_r($row);
        $allRow = $this->fetchAll('SELECT * FROM customers');// It will fetch all the row from the table
        print_r($allRow);

        /*
        Array
(
    [id] => 1
    [0] => 1
    [first_name] => suresh
    [1] => suresh
    [last_name] => j
    [2] => j
    [email] => suresh.j@softwaysolutions.com
    [3] => suresh.j@softwaysolutions.com
    [password] => suresh123
    [4] => suresh123
    [created] => 2015-04-13 00:00:00
    [5] => 2015-04-13 00:00:00
    [modified] => 2015-04-13 00:00:00
    [6] => 2015-04-13 00:00:00
)
Array
(
    [0] => Array
        (
            [id] => 1
            [0] => 1
            [first_name] => suresh
            [1] => suresh
            [last_name] => j
            [2] => j
            [email] => suresh.j@softwaysolutions.com
            [3] => suresh.j@softwaysolutions.com
            [password] => suresh123
            [4] => suresh123
            [created] => 2015-04-13 00:00:00
            [5] => 2015-04-13 00:00:00
            [modified] => 2015-04-13 00:00:00
            [6] => 2015-04-13 00:00:00
        )

)

        */
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}