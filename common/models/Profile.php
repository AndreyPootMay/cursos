<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $user_id
 * @property string $name
 * @property string $public_email
 * @property string $gravatar_email
 * @property string $gravatar_id
 * @property string $location
 * @property string $website
 * @property string $timezone
 * @property string $bio
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['bio'], 'string'],
            [['name', 'public_email', 'gravatar_email', 'location', 'website'], 'string', 'max' => 255],
            [['gravatar_id'], 'string', 'max' => 32],
            [['timezone'], 'string', 'max' => 40],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Nombre'),
            'public_email' => Yii::t('app', 'E-Mail Público'),
            'gravatar_email' => Yii::t('app', 'E-Mail Gravatar'),
            'gravatar_id' => Yii::t('app', 'ID del Gravatar'),
            'location' => Yii::t('app', 'Locación'),
            'website' => Yii::t('app', 'Sitio Web'),
            'timezone' => Yii::t('app', 'Zona Horaria'),
            'bio' => Yii::t('app', 'Biografía'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
