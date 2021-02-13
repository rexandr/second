<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210213_151112_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'meta_title' => $this->string()->notNull(),
            'meta_description' => $this->text()->defaultValue(null),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->defaultValue(null),
            'status' => $this->integer()->defaultValue(null),
            'image' => $this->string(255)->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
