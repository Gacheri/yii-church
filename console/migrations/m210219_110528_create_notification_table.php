<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%notification}}`.
 */
class m210219_110528_create_notification_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%notification}}', [
            'id' => $this->primaryKey(),
            'level' => $this->string(),
            'notifiable_type' => $this->string(),
            'notifiable_id' => $this->integer()->unsigned(),
            'subject' => $this->string(),
            'body' => $this->text(),
            'read_at' => $this->timestamp()->null(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->null(),
        ]);
        $this->createIndex('notifiable', 'notification', ['notifiable_type', 'notifiable_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('notifiable', 'notification');
        $this->dropTable('notification');
    }
}
