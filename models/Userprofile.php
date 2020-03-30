<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property int $id
 * @property int $idUser
 * @property int $idProfile
 */
class Userprofile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idUser', 'idProfile'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idUser' => 'Id User',
            'idProfile' => 'Id Profile',
        ];
    }
}
