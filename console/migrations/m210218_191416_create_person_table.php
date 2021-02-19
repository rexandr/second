<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%person}}`.
 */
class m210218_191416_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%person}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->defaultValue(null),
            'soname' => $this->string(255)->defaultValue(null),
            'age' => $this->integer()->defaultValue(null),
            'address' => $this->string(255)->defaultValue(null),
            'photo' => $this->string(255)->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%person}}');
    }
}
