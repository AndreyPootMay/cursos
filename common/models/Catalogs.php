<?php

namespace common\models;

use Yii;
use common\models\CatalogsType;

/**
 * This is the model class for table "catalogs".
 *
 * @property int $id
 * @property int $catalog_id
 * @property int $catalog_type
 * @property string $catalog_name
 * @property int $active
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 */
class Catalogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalogs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'catalog_id', 'catalog_type', 'active', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['catalog_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'catalog_id' => Yii::t('app', 'ID del Catálogo'),
            'catalog_type' => Yii::t('app', 'Tipo del catálogo'),
            'catalog_name' => Yii::t('app', 'Nombre del catálogo'),
            'active' => Yii::t('app', 'Activo'),
            'created_at' => Yii::t('app', 'Creado el'),
            'created_by' => Yii::t('app', 'Creado por'),
            'updated_at' => Yii::t('app', 'Editado el'),
            'updated_by' => Yii::t('app', 'Editado por'),
        ];
    }

    /**
     * Regresa todos los tipos de catálogos
     * @return [type] [description]
     */
    public function getCatalogsType()
    {
        return $this->hasMany(CatalogsType::className(), ['catalog_id' => 'id']);
    }
}
