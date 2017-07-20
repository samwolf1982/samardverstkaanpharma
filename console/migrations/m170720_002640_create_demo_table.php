<?php

use yii\db\Migration;

/**
 * Handles the creation of table `demo`.
 */
class m170720_002640_create_demo_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%demo}}', [
            'id' => $this->primaryKey(),
            'test1' => $this->string(),
            'test2' => $this->string(),
            'test3' => $this->string(),
            'test4' => $this->string(),
            'test5' => $this->string(),

            'test6' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);


        foreach (range(0,100) as $item) {
            $this->batchInsert('{{%demo}}', ['test1', 'test2', 'test3', 'test4', 'test5', 'test6', 'created_at', 'updated_at'], [
                [
                    rand(),
                    rand(),
                    rand(),
                    rand(),
                    rand(),
                    rand(),
                    time(),time()

                ],

            ]);
        }





    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('demo');
    }
}
