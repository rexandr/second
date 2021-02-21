<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_product}}`.
 */
class m210221_140830_create_order_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_product}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->defaultValue(null),
            'product_id' => $this->integer()->defaultValue(null),
            'name' => $this->string()->defaultValue(null),
            'count' => $this->integer()->defaultValue(null),
            'price' => $this->decimal(8,2)->defaultValue(null),
            'total_price' => $this->decimal(8,2)->defaultValue(null),
        ]);
        $this->addForeignKey('fk-order_product-to-order', '{{%order_product}}', 'order_id', '{{%order}}', 'id', 'CASCADE', 'CASCADE');
        $this->createIndex('idx-order_product-order_id', '{{%order_product}}', 'order_id');
        $this->createIndex('idx-order_product-product_id', '{{%order_product}}', 'product_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_product}}');
    }
}
