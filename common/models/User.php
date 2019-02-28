<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property string $unconfirmed_email
 * @property string $registration_ip
 * @property int $flags
 * @property int $confirmed_at
 * @property int $blocked_at
 * @property int $updated_at
 * @property int $created_at
 * @property int $last_login_at
 * @property string $last_login_ip
 * @property string $auth_tf_key
 * @property int $auth_tf_enabled
 * @property int $password_changed_at
 * @property int $gdpr_consent
 * @property int $gdpr_consent_date
 * @property int $gdpr_deleted
 *
 * @property Courses[] $courses
 * @property Faq[] $faqs
 * @property MyCourses[] $myCourses
 * @property Profile $profile
 * @property SocialAccount[] $socialAccounts
 * @property Token[] $tokens
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'auth_key', 'updated_at', 'created_at'], 'required'],
            [['flags', 'confirmed_at', 'blocked_at', 'updated_at', 'created_at', 'last_login_at', 'auth_tf_enabled', 'password_changed_at', 'gdpr_consent', 'gdpr_consent_date', 'gdpr_deleted'], 'integer'],
            [['username', 'email', 'unconfirmed_email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['auth_key'], 'string', 'max' => 32],
            [['registration_ip', 'last_login_ip'], 'string', 'max' => 45],
            [['auth_tf_key'], 'string', 'max' => 16],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Nombre del Usuario'),
            'email' => Yii::t('app', 'Correo Electrónico'),
            'password_hash' => Yii::t('app', 'Contraseña Encriptada'),
            'auth_key' => Yii::t('app', 'Llave de autenticación'),
            'unconfirmed_email' => Yii::t('app', 'Correo sin confirmar'),
            'registration_ip' => Yii::t('app', 'IP de Registración'),
            'flags' => Yii::t('app', 'Banderas'),
            'confirmed_at' => Yii::t('app', 'Confirmado el'),
            'blocked_at' => Yii::t('app', 'Bloqueado el'),
            'updated_at' => Yii::t('app', 'Editado el'),
            'created_at' => Yii::t('app', 'Creado el'),
            'last_login_at' => Yii::t('app', 'Lugar de Última Sesión'),
            'last_login_ip' => Yii::t('app', 'IP de Última Sesión'),
            'auth_tf_key' => Yii::t('app', 'Auth Tf Key'),
            'auth_tf_enabled' => Yii::t('app', 'Auth Tf Enabled'),
            'password_changed_at' => Yii::t('app', 'Cambio de Contraseña El'),
            'gdpr_consent' => Yii::t('app', 'Gdpr Consent'),
            'gdpr_consent_date' => Yii::t('app', 'Gdpr Consent Date'),
            'gdpr_deleted' => Yii::t('app', 'Gdpr Deleted'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourses()
    {
        return $this->hasMany(Courses::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqs()
    {
        return $this->hasMany(Faq::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyCourses()
    {
        return $this->hasMany(MyCourses::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocialAccounts()
    {
        return $this->hasMany(SocialAccount::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTokens()
    {
        return $this->hasMany(Token::className(), ['user_id' => 'id']);
    }
}

