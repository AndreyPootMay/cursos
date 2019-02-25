<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property int $user_id
 * @property string $course_name
 * @property string $course_details
 * @property int $evaluation
 * @property string $category
 * @property string $price
 * @property string $students
 * @property int $active
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Announces[] $announces
 * @property User $user
 * @property Faq[] $faqs
 * @property Section[] $sections
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'course_name', 'course_details', 'category', 'price', 'students', 'active', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'evaluation', 'active', 'created_at', 'updated_at'], 'integer'],
            [['price'], 'number'],
            [['course_name', 'course_details'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 50],
            [['students'], 'string', 'max' => 250],
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
            'course_name' => Yii::t('app', 'Course Name'),
            'course_details' => Yii::t('app', 'Course Details'),
            'evaluation' => Yii::t('app', 'Evaluation'),
            'category' => Yii::t('app', 'Category'),
            'price' => Yii::t('app', 'Price'),
            'students' => Yii::t('app', 'Students'),
            'active' => Yii::t('app', 'Active'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnnounces()
    {
        return $this->hasMany(Announces::className(), ['courses_id' => 'id']);
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
    public function getFaqs()
    {
        return $this->hasMany(Faq::className(), ['courses_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['courses_id' => 'id']);
    }
}
