<?php

use yii\db\Schema;
use yii\db\Migration;

class m141109_104615_create_products extends Migration
{
    public function up()
    {
    	$this->createTable('{{%product}}', [
    		'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING,
			'price' => Schema::TYPE_FLOAT,
			'quantity' => Schema::TYPE_INTEGER,	
		]);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');

        return true;
    }
}
