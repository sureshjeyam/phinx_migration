<?php

use Phinx\Migration\AbstractMigration;

class TableobjTable extends AbstractMigration
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
        $table = $this->table('customers');
        print_r($table);
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}

/*
Phinx\Db\Table Object
(
    [name:protected] => customers
    [options:protected] => Array
        (
        )

    [adapter:protected] => Phinx\Db\Adapter\MysqlAdapter Object
        (
            [signedColumnTypes:protected] => Array
                (
                    [integer] => 1
                    [biginteger] => 1
                    [float] => 1
                    [decimal] => 1
                )

            [options:protected] => Array
                (
                    [adapter] => mysql
                    [host] => localhost
                    [name] => phinx_migration
                    [user] => root
                    [pass] => 
                    [port] => 3306
                    [charset] => utf8
                    [default_migration_table] => phinxlog
                )

            [output:protected] => Symfony\Component\Console\Output\ConsoleOutput Object
                (
                    [stderr:Symfony\Component\Console\Output\ConsoleOutput:private] => Symfony\Component\Console\Output\StreamOutput Object
                        (
                            [stream:Symfony\Component\Console\Output\StreamOutput:private] => Resource id #57
                            [verbosity:Symfony\Component\Console\Output\Output:private] => 1
                            [formatter:Symfony\Component\Console\Output\Output:private] => Symfony\Component\Console\Formatter\OutputFormatter Object
                                (
                                    [decorated:Symfony\Component\Console\Formatter\OutputFormatter:private] => 1
                                    [styles:Symfony\Component\Console\Formatter\OutputFormatter:private] => Array
                                        (
                                            [error] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                                (
                                                    [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                            [set] => 37
                                                            [unset] => 39
                                                        )

                                                    [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                            [set] => 41
                                                            [unset] => 49
                                                        )

                                                    [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                        )

                                                )

                                            [info] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                                (
                                                    [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                            [set] => 32
                                                            [unset] => 39
                                                        )

                                                    [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                                    [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                        )

                                                )

                                            [comment] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                                (
                                                    [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                            [set] => 33
                                                            [unset] => 39
                                                        )

                                                    [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                                    [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                        )

                                                )

                                            [question] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                                (
                                                    [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                            [set] => 30
                                                            [unset] => 39
                                                        )

                                                    [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                            [set] => 46
                                                            [unset] => 49
                                                        )

                                                    [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                        )

                                                )

                                        )

                                    [styleStack:Symfony\Component\Console\Formatter\OutputFormatter:private] => Symfony\Component\Console\Formatter\OutputFormatterStyleStack Object
                                        (
                                            [styles:Symfony\Component\Console\Formatter\OutputFormatterStyleStack:private] => Array
                                                (
                                                )

                                            [emptyStyle:Symfony\Component\Console\Formatter\OutputFormatterStyleStack:private] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                                (
                                                    [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                                    [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                                    [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                        (
                                                        )

                                                )

                                        )

                                )

                        )

                    [stream:Symfony\Component\Console\Output\StreamOutput:private] => Resource id #51
                    [verbosity:Symfony\Component\Console\Output\Output:private] => 1
                    [formatter:Symfony\Component\Console\Output\Output:private] => Symfony\Component\Console\Formatter\OutputFormatter Object
                        (
                            [decorated:Symfony\Component\Console\Formatter\OutputFormatter:private] => 1
                            [styles:Symfony\Component\Console\Formatter\OutputFormatter:private] => Array
                                (
                                    [error] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                        (
                                            [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                    [set] => 37
                                                    [unset] => 39
                                                )

                                            [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                    [set] => 41
                                                    [unset] => 49
                                                )

                                            [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                )

                                        )

                                    [info] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                        (
                                            [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                    [set] => 32
                                                    [unset] => 39
                                                )

                                            [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                            [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                )

                                        )

                                    [comment] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                        (
                                            [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                    [set] => 33
                                                    [unset] => 39
                                                )

                                            [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                            [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                )

                                        )

                                    [question] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                        (
                                            [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                    [set] => 30
                                                    [unset] => 39
                                                )

                                            [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                    [set] => 46
                                                    [unset] => 49
                                                )

                                            [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                )

                                        )

                                )

                            [styleStack:Symfony\Component\Console\Formatter\OutputFormatter:private] => Symfony\Component\Console\Formatter\OutputFormatterStyleStack Object
                                (
                                    [styles:Symfony\Component\Console\Formatter\OutputFormatterStyleStack:private] => Array
                                        (
                                        )

                                    [emptyStyle:Symfony\Component\Console\Formatter\OutputFormatterStyleStack:private] => Symfony\Component\Console\Formatter\OutputFormatterStyle Object
                                        (
                                            [foreground:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                            [background:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => 
                                            [options:Symfony\Component\Console\Formatter\OutputFormatterStyle:private] => Array
                                                (
                                                )

                                        )

                                )

                        )

                )

            [schemaTableName:protected] => phinxlog
            [connection:protected] => PDO Object
                (
                )

            [commandStartTime:protected] => 
        )

    [columns:protected] => Array
        (
        )

    [indexes:protected] => Array
        (
        )

    [foreignKeys:protected] => Array
        (
        )

)

*/