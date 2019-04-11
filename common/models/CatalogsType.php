<?php

namespace common\models;

use Yii;
use common\models\Catalogs;

/**
 * This is the model class for table "catalogs_type".
 *
 * @property int $id
 * @property int $catalog_type
 * @property string $singular_name
 * @property string $plural_name
 * @property int $order_menu
 */
class CatalogsType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalogs_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'catalog_type', 'order_menu'], 'integer'],
            [['singular_name', 'plural_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'catalog_type' => Yii::t('app', 'Tipo de catálogo'),
            'singular_name' => Yii::t('app', 'Nombre singular'),
            'plural_name' => Yii::t('app', 'Nombre Plural'),
            'order_menu' => Yii::t('app', 'Orden en el menú'),
        ];
    }

    /**
     * Selecciona todos los catálogos sin importar
     * @return [type] [description]
     */
    public function getCatalogs()
    {
        return $this->hasOne(Catalogs::className(), ['id' => 'catalog_id']);
    }
}
