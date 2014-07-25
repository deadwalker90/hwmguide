<?php

use yii\db\Schema;

class m140725_100344_create_carticlescategories_table extends \yii\db\Migration
{
    public function up()
    {
        $this->createTable('carticlescategories', [
            'id' => 'pk',
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' UNIQUE NOT NULL',
            'description' => Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        $this->dropTable('carticlescategories');
    }
}
