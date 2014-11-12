<?php

use yii\db\Migration;
use yii\db\Schema;

class m141109_111923_create_categories extends Migration
{
    public function up()
    {
        $this->createTable('{{%category}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'lft' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL',
            'rgt' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL',
            'level' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL',
        ]);
        $this->createIndex('lft', '{{%category}}', ['lft']);
        $this->createIndex('rgt', '{{%category}}', ['rgt']);
        $this->createIndex('level', '{{%category}}', ['level']);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
        return true;
    }
}
