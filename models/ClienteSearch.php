<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idCidade', 'idAssociacao'], 'integer'],
            [['nome', 'cnpj', 'endereco', 'complemento', 'bairro', 'telefone', 'email'], 'safe'],
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
        $query = Cliente::find();

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
            'id' => $this->id,
            'idCidade' => $this->idCidade,
            'idAssociacao' => $this->idAssociacao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cnpj', $this->cnpj])
            ->andFilterWhere(['like', 'endereco', $this->endereco])
            ->andFilterWhere(['like', 'complemento', $this->complemento])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
