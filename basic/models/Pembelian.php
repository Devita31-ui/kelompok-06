<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembelian".
 *
 * @property int $Id_Pembelian
 * @property string|null $Tanggal_Pembelian
 * @property int $Id_Produk
 * @property int $Id_Pelanggan
 *
 * @property Pelanggan $pelanggan
 * @property Produk $produk
 */
class Pembelian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembelian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pembelian', 'Id_Produk', 'Id_Pelanggan'], 'required'],
            [['Id_Pembelian', 'Id_Produk', 'Id_Pelanggan'], 'integer'],
            [['Tanggal_Pembelian'], 'string', 'max' => 45],
            [['Id_Pembelian'], 'unique'],
            [['Id_Pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['Id_Pelanggan' => 'Id_Pelanggan']],
            [['Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['Id_Produk' => 'Id_Produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pembelian' => 'Id Pembelian',
            'Tanggal_Pembelian' => 'Tanggal Pembelian',
            'Id_Produk' => 'Id Produk',
            'Id_Pelanggan' => 'Id Pelanggan',
        ];
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['Id_Pelanggan' => 'Id_Pelanggan']);
    }

    /**
     * Gets query for [[Produk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduk()
    {
        return $this->hasOne(Produk::className(), ['Id_Produk' => 'Id_Produk']);
    }
}
