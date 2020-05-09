<?php
use Phinx\Migration\AbstractMigration;

class CreateOrders extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('orders');
        $table
            ->addColumn('location_id', 'integer', [
                'default' => null,
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('product_id', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 255,
                'null' => false
            ])
            ->addColumn('trailer_id', 'integer', [
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
