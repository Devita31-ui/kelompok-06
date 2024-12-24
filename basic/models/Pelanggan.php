<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $Id_Pelanggan
 * @property string|null $Nama_Pelanggan
 * @property string|null $Alamat_Pelanggan
 * @property string|null $NoHp_Pelanggan
 *
 * @property Pembelian[] $pembelians
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pelanggan'], 'required'],
            [['Id_Pelanggan'], 'integer'],
            [['Nama_Pelanggan', 'Alamat_Pelanggan', 'NoHp_Pelanggan'], 'string', 'max' => 45],
            [['Id_Pelanggan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pelanggan' => 'Id Pelanggan',
            'Nama_Pelanggan' => 'Nama Pelanggan',
            'Alamat_Pelanggan' => 'Alamat Pelanggan',
            'NoHp_Pelanggan' => 'No Hp Pelanggan',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['Id_Pelanggan' => 'Id_Pelanggan']);
    }
}
