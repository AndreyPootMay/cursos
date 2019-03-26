<?php

use yii\db\Migration;

/**
 * Class m190326_171200_catalogs
 */
class m190326_171200_catalogs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        return $this->execute(file_get_contents(Yii::getAlias('console/migrations/sql/m190326_171200.sql')));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190326_171200_catalogs cannot be reverted.\n";

        return false;
    }
}
