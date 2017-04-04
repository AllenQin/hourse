<?php

use yii\db\Migration;

class m170404_030312_notices extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170404_030312_notices cannot be reverted.\n";

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
    	
    	$this->createTable('{{%notices}}', [
    			'id' => $this->primaryKey(),
    			'email' => $this->char(100)->notNull()->unique()->comment('order notice email'),
    			'is_deleted' => $this->smallInteger()->notNull()->defaultValue(0),
    			'created_at' => $this->integer()->notNull(),
    			'updated_at' => $this->integer()->notNull(),
    	], $tableOptions);
    }

    public function down()
    {
    	$this->dropTable("{{%notices}}");
    }
}
