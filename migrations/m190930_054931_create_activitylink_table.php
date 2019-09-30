<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%activitylink}}`.
 */
class m190930_054931_create_activitylink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activitylink', [
            'id' => $this->primaryKey(),
            'id_activity' => $this->integer(),
            'id_user' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activitylink');
    }
}
