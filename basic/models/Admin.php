<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $Id_Penjual
 * @property string|null $Nama_Penjual
 * @property string|null $Alamat_penjual
 * @property string|null $NoHp_Penjual
 *
 * @property Penjualan[] $penjualans
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Penjual'], 'required'],
            [['Id_Penjual'], 'integer'],
            [['Nama_Penjual', 'Alamat_penjual', 'NoHp_Penjual'], 'string', 'max' => 45],
            [['Id_Penjual'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Penjual' => 'Id Penjual',
            'Nama_Penjual' => 'Nama Penjual',
            'Alamat_penjual' => 'Alamat Penjual',
            'NoHp_Penjual' => 'No Hp Penjual',
        ];
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::className(), ['Id_penjual' => 'Id_Penjual']);
    }
}
