<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResultadoMensal;

/**
 * ResultadoMensalSearch represents the model behind the search form of `app\models\ResultadoMensal`.
 */
class ResultadoMensalSearch extends ResultadoMensal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ano', 'mes', 'idCategoriaResultado', 'idCliente'], 'integer'],
            [['valor'], 'number'],
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
        $query = ResultadoMensal::find();

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
            'ano' => $this->ano,
            'mes' => $this->mes,
            'valor' => $this->valor,
            'idCategoriaResultado' => $this->idCategoriaResultado,
            'idCliente' => $this->idCliente,
        ]);

        return $dataProvider;
    }
}
