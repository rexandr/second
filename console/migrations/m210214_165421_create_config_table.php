<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%config}}`.
 */
class m210214_165421_create_config_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%config}}', [
            'id' => $this->primaryKey(),
            'key' => $this->string(255)->defaultValue(null),
            'value' => $this->text()->defaultValue(null),
            'label' => $this->string(255)->defaultValue(null),
            'pos' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%config}}');
    }
}
