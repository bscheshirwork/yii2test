<?php

use yii\db\Schema;
use yii\db\Migration;

class m141021_155552_create_starter_table_pack extends Migration
{
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'login' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
	
        $this->createTable('customer', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER,
            'note' => Schema::TYPE_TEXT,
        ]);
	
        $this->createTable('order', [
            'id' => Schema::TYPE_PK,
            'customer_id' => Schema::TYPE_INTEGER,
            'note' => Schema::TYPE_TEXT,
        ]);
	
        $this->createTable('item', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT,
        ]);
	
        $this->createTable('item2order', [
            'item_id' => Schema::TYPE_INTEGER,
            'order_id' => Schema::TYPE_INTEGER,
        ]);
	
	//$this->addForeignKey( $name, $table, $columns, $refTable, $refColumns, $delete = null, $update = null );
	//customer
	$this->addForeignKey('FK_user', 'customer', 'user_id', 'user', 'id', 'CASCADE', 'RESTRICT');
	//order
	$this->addForeignKey('FK_customer', 'order', 'customer_id', 'customer', 'id', 'CASCADE');
	//item2order
	$this->addForeignKey('FK_order', 'item2order', 'order_id', 'order', 'id', 'CASCADE');
	$this->addForeignKey('FK_item', 'item2order', 'item_id', 'item', 'id', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('user');
        $this->dropTable('customer');
        $this->dropTable('order');
        $this->dropTable('item');
        $this->dropTable('item2order');
    }

}
