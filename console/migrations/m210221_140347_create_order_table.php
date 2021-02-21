<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m210221_140347_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->defaultValue(null),
            'surname' => $this->string()->defaultValue(null),
            'phone' => $this->string()->defaultValue(null),
            'email' => $this->string()->defaultValue(null),
            'comment' => $this->text(),
            'total_price' => $this->decimal(8,2)->defaultValue(null),
            'delivery_id' => $this->integer()->defaultValue(null),
            'payment_id' => $this->integer()->defaultValue(null),
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
        $this->dropTable('{{%order}}');
    }
}
