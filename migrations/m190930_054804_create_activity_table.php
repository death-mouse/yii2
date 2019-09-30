<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activity}}`.
 */
class m190930_054804_create_activity_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
        'id' => $this->primaryKey(),
        'name' => $this->string(64)->notNull(),
        'date_start' => $this->timestamp()->defaultExpression("now()"),
        'date_end' => $this->timestamp()->defaultExpression("now()"),
        'id_user' => $this->integer(),
        'comment' => $this->text(250),
        'created_at' => $this->dateTime(),
        'updated_at' => $this->dateTime(),
    ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activity');
    }
}
