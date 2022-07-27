<?php

use yii\db\Migration;

/**
 * Class m220727_053956_create_table_all
 */
class m220727_053956_create_table_all extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this ->createTable('contact', [
            'id' => $this->primaryKey(),
            'name' => $this->string(55)->null(),
            'email' => $this->string(55)->null(),
            'phone' => $this->string(13)->null(),
            'status' => $this->integer()->defaultValue(0),
            'message' => $this->string(255)->null(),
            'created_at' => $this->integer()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220727_053956_create_table_all cannot be reverted.\n";

        return false;
    }
    */
}
