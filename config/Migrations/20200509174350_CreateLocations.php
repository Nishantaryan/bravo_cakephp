<?php
use Phinx\Migration\AbstractMigration;

class CreateLocations extends AbstractMigration
{
    public function up()
    {
    $table = $this->table('locations');
        $table
            ->addColumn('location_types_id', 'integer', [
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
    $this->dropTable('locations');
}
}
