<?php

use yii\db\Schema;
use yii\db\Migration;

class m141021_174209_fill_starter_table_pack extends Migration
{
    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];
    
    private static $customer = [
	[
            //'id' => Schema::TYPE_PK,
            'user_id' => 100,
            'note' => 'admin customer lal',
        ],
    ];
    private static $order = [
	[
            //'id' => Schema::TYPE_PK,
            'customer_id' => 1,
            'note' => 'first order',
        ],
	[
            //'id' => Schema::TYPE_PK,
            'customer_id' => 1,
            'note' => 'second order',
        ],
    ];
	
    private static $item = [
	[
            //'id' => Schema::TYPE_PK,
            'name' => 'first item',
        ],
	[
            //'id' => Schema::TYPE_PK,
            'name' => 'second item',
        ],
	[
            //'id' => Schema::TYPE_PK,
            'name' => 'third item',
        ],
    ];
	
    private static $item2order = [
	[
            'item_id' => 1,
            'order_id' => 1,
        ],
	[
            'item_id' => 2,
            'order_id' => 1,
        ],
	[
            'item_id' => 3,
            'order_id' => 1,
        ],
	[
            'item_id' => 2,
            'order_id' => 2,
        ],
    ];
	
    public function up()
    {
	foreach ([100,101] as $id)
	    (new app\models\User(self::$users[$id]))->save();
	
	foreach (self::$customer as $value)
	    (new app\models\Customer($value))->save();
	
	foreach (self::$order as $value)
	    (new app\models\Order($value))->save();
	
	foreach (self::$item as $value)
	    (new app\models\Item($value))->save();
	
	foreach (self::$item2order as $value)
	    (new app\models\Item2Order($value))->save();
    }

    public function down()
    {
        echo "m141021_174209_fill_starter_table_pack cannot be reverted.\n";

        return false;
    }
}
