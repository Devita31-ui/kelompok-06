<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pelanggan;

/**
 * PelangganSearch represents the model behind the search form of `app\models\Pelanggan`.
 */
class PelangganSearch extends Pelanggan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pelanggan'], 'integer'],
            [['Nama_Pelanggan', 'Alamat_Pelanggan', 'NoHp_Pelanggan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pelanggan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_Pelanggan' => $this->Id_Pelanggan,
        ]);

        $query->andFilterWhere(['like', 'Nama_Pelanggan', $this->Nama_Pelanggan])
            ->andFilterWhere(['like', 'Alamat_Pelanggan', $this->Alamat_Pelanggan])
            ->andFilterWhere(['like', 'NoHp_Pelanggan', $this->NoHp_Pelanggan]);

        return $dataProvider;
    }
}
