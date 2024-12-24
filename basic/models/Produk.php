<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $Id_Produk
 * @property string|null $Nama_Produk
 * @property int|null $Stok_Produk
 * @property int|null $Harga_Produk
 *
 * @property Pembelian[] $pembelians
 * @property Penjualan[] $penjualans
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Produk'], 'required'],
            [['Id_Produk', 'Stok_Produk', 'Harga_Produk'], 'integer'],
            [['Nama_Produk'], 'string', 'max' => 45],
            [['Id_Produk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Produk' => 'Id Produk',
            'Nama_Produk' => 'Nama Produk',
            'Stok_Produk' => 'Stok Produk',
            'Harga_Produk' => 'Harga Produk',
        ];
    }

    /**
     * Gets query for [[Pembelians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelians()
    {
        return $this->hasMany(Pembelian::className(), ['Id_Produk' => 'Id_Produk']);
    }

    /**
     * Gets query for [[Penjualans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjualans()
    {
        return $this->hasMany(Penjualan::className(), ['Id_Produk' => 'Id_Produk']);
    }
}
