<?php

use yii\db\Schema;
use yii\db\Migration;

class m141109_111923_create_categories extends Migration
{
    public function up()
    {
    	$this->createTable('{{%category}}', [
    		'id' => Schema::TYPE_PK,
    		'name' => Schema::TYPE_STRING,
    	]);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');

        return true;
    }
}
