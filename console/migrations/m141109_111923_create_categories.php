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
            'root' => Schema::TYPE_INTEGER . ' UNSIGNED DEFAULT NULL',
            'left' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL',
            'right' => Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL',
            'level' => Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL',
        ]);
        $this->createIndex('root', '{{%category}}', ['root']);
        $this->createIndex('left', '{{%category}}', ['left']);
        $this->createIndex('right', '{{%category}}', ['right']);
        $this->createIndex('level', '{{%category}}', ['level']);
    }

    public function down()
    {
        $this->dropTable('{{%category}}');
        return true;
    }
}
