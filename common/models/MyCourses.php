<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "my_courses".
 *
 * @property int $id
 * @property int $user_id
 * @property int $courses_id
 * @property int $evaluation
 * @property int $progress
 * @property int $certification
 * @property int $active
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class MyCourses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'my_courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'courses_id', 'progress', 'certification', 'active', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'courses_id', 'evaluation', 'progress', 'certification', 'active', 'created_at', 'updated_at'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'Id del Usuario'),
            'courses_id' => Yii::t('app', 'Id del Curso'),
            'evaluation' => Yii::t('app', 'Evaluación'),
            'progress' => Yii::t('app', 'Progreso'),
            'certification' => Yii::t('app', 'Certificado'),
            'active' => Yii::t('app', 'Activo'),
            'created_at' => Yii::t('app', 'Creado el'),
            'updated_at' => Yii::t('app', 'Actualizado el'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasOne(Courses::className(), ['id' => 'courses_id']);
    }
}
