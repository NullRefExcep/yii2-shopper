<?php

use yii\db\Migration;
use yii\db\Schema;

class m141109_104615_create_products extends Migration
{
    public function up()
    {
        $this->createTable('{{%product}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'price' => Schema::TYPE_FLOAT,
            'short_description' => Schema::TYPE_TEXT,
            'long_description' => Schema::TYPE_TEXT,
            'image' => Schema::TYPE_STRING,
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%product}}');
        return true;
    }
}
