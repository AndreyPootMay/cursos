<?php

use yii\db\Migration;

/**
 * Class m190103_033820_tables
 */
class m190103_033820_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190103_033820.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_033820_tables cannot be reverted.\n";

        return false;
    }
}
