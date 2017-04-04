<?php

use yii\db\Migration;

class m170404_030621_message extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170404_030621_message cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
		$tableOptions = null;
    	if ($this->db->driverName === 'mysql') {
    		// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
    		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    	}
    	
    	$this->createTable('{{%messages}}', [
    		'id' => $this->primaryKey(),
    		'username' => $this->char(30)->notNull()->comment('user name'),
    		'contact' => $this->char(40)->notNull()->comment('user contact'),
    		'content' => $this->text()->notNull()->comment('message content'),
    		'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('the message status'),
    		'created_at' => $this->integer()->notNull(),
    		'updated_at' => $this->integer()->notNull(),
    	], $tableOptions);
    }

    public function down()
    {
    	return $this->dropTable("{{%messages}}");
    }
}
