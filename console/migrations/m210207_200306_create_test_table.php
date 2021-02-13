<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%test}}`.
 */
class m210207_200306_create_test_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%test}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue('Petya'),
            'password' => $this->string(255),
            'status' => $this->integer()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%test}}');
    }
}
