<?php

use yii\db\Migration;

/**
 * Class m190207_181943_borrar_tabla
 */
class m190207_181943_borrar_tabla extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/ m190207_181943.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190207_181943_borrar_tabla cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190207_181943_borrar_tabla cannot be reverted.\n";

        return false;
    }
    */
}
