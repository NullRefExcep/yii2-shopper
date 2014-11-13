<?php

use yii\db\Migration;
use yii\db\Schema;

class m141113_155131_create_category_product extends Migration
{
    public function up()
    {
        $this->createTable('{{%category_product}}', [
            'category_id' => Schema::TYPE_INTEGER,
            'product_id' => Schema::TYPE_INTEGER,
        ]);
        $this->addPrimaryKey('pk', '{{%category_product}}', ['category_id', 'product_id']);
    }

    public function down()
    {
        $this->dropTable('{{%category_product}}');
        return true;
    }
}
