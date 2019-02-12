<?php

use yii\db\Migration;

/**
 * Class m190212_172605_tables_again
 */
class m190212_172605_tables_again extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190212_172605.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190212_172605_tables_again cannot be reverted.\n";

        return false;
    }
}
