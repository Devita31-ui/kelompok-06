<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property int $Id_Penjualan
 * @property int $Id_penjual
 * @property int $Id_Produk
 *
 * @property Admin $penjual
 * @property Produk $produk
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Penjualan', 'Id_penjual', 'Id_Produk'], 'required'],
            [['Id_Penjualan', 'Id_penjual', 'Id_Produk'], 'integer'],
            [['Id_Penjualan'], 'unique'],
            [['Id_penjual'], 'exist', 'skipOnError' => true, 'targetClass' => Admin::className(), 'targetAttribute' => ['Id_penjual' => 'Id_Penjual']],
            [['Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['Id_Produk' => 'Id_Produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Penjualan' => 'Id Penjualan',
            'Id_penjual' => 'Id Penjual',
            'Id_Produk' => 'Id Produk',
        ];
    }

    /**
     * Gets query for [[Penjual]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenjual()
    {
        return $this->hasOne(Admin::className(), ['Id_Penjual' => 'Id_penjual']);
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
