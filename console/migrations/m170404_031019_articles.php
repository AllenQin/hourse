<?php

use yii\db\Migration;

class m170404_031019_articles extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m170404_031019_articles cannot be reverted.\n";

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
    	 
    	$this->createTable('{{%articles}}', [
    		'id' => $this->primaryKey(),
    		'title' => $this->char(100)->notNull()->comment('the article title'),
    		'cover' => $this->char(200)->null()->comment('the article cover'),
    		'content' => $this->text()->notNull()->comment('the article content'),
    		'category' => $this->smallInteger()->notNull()->comment('the article category'),
    		'views' => $this->integer()->unsigned()->notNull()->defaultValue(0)->comment('the article views'),
    		'created_at' => $this->integer()->notNull(),
    		'updated_at' => $this->integer()->notNull(),
    	], $tableOptions);
    }

    public function down()
    {
    	return $this->dropTable("{{%articles}}");
    }
}
