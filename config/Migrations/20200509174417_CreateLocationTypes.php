<?php
use Phinx\Migration\AbstractMigration;

class CreateLocationTypes extends AbstractMigration
{
    public function up()
    {
    $table = $this->table('location_types');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
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
    $this->dropTable('location_types');
}
}
