<?php

use yii\db\Migration;

/**
 * Class m190128_020544_relationship
 */
class m190128_020544_relationship extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190128_020544.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190128_020544_relationship cannot be reverted.\n";

        return false;
    }
}
