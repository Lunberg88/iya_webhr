<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 * Has foreign keys to the tables:
 *
 * - `user`
 */
class m170514_164022_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'story' => $this->text(),
            'full' => $this->text(),
            'date' => $this->timestamp(),
            'user_id' => $this->integer(5),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-news-user_id',
            'news',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-news-user_id',
            'news',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-news-user_id',
            'news'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-news-user_id',
            'news'
        );

        $this->dropTable('news');
    }
}
