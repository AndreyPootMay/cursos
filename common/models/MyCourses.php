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
            'user_id' => Yii::t('app', 'User ID'),
            'courses_id' => Yii::t('app', 'Courses ID'),
            'evaluation' => Yii::t('app', 'Evaluation'),
            'progress' => Yii::t('app', 'Progress'),
            'certification' => Yii::t('app', 'Certification'),
            'active' => Yii::t('app', 'Active'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
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
