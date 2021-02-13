<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%page}}`.
 */
class m210213_130523_create_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%page}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->defaultValue(null),
            'meta_title' => $this->string(255)->notNull(),
            'meta_description' => $this->text()->defaultValue(null),
            'header' => $this->string(255)->notNull(),
            'description' => $this->text()->defaultValue(null),
            'image' => $this->string(255)->defaultValue(null),
            'status' => $this->integer()->defaultValue(null),
            'created_at' => $this->integer()->defaultValue(null),
            'updated_at' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%page}}');
    }
}
