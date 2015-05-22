<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "countries".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 *
 * @property Arbiters[] $arbiters
 * @property Coaches[] $coaches
 * @property Players[] $players
 * @property Stadia[] $stadias
 */
class Country extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArbiter()
    {
        return $this->hasMany(Arbiters::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoach()
    {
        return $this->hasMany(Coaches::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasMany(Players::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStadium()
    {
        return $this->hasMany(Stadia::className(), ['country_id' => 'id']);
    }
}
