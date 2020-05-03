<?php
use Phinx\Migration\AbstractMigration;

class CreateUsersTypes extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('users_types');
        $table
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('type_id', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->create();
}
public function down()
{
    $this->dropTable('users_types');
}
}
