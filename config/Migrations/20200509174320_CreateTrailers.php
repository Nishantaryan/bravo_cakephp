<?php
use Phinx\Migration\AbstractMigration;

class CreateTrailers extends AbstractMigration
{
  
        public function up()
        {
            $table = $this->table('trailers');
            $table
                ->addColumn('trailer_number', 'integer', [
                    'default' => null,
                    'limit' => 50,
                    'null' => false
                ])
                ->addColumn('driver_id', 'integer', [
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
        $this->dropTable('trailers');
    }
}
