<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lancamento;

/**
 * LancamentoSearch represents the model behind the search form of `app\models\Lancamento`.
 */
class LancamentoSearch extends Lancamento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tipo', 'idCredorDevedor', 'idBanco', 'idTipoDocumento', 'idFormaPagamento', 'idTipoConta', 'idPlanoConta', 'idCliente'], 'integer'],
            [['numDocumento', 'dtVencimento', 'dtEmissao', 'dtRealizacao', 'descricao'], 'safe'],
            [['valorPrevisto', 'valorRealizado'], 'number'],
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
        $query = Lancamento::find();

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
            'tipo' => $this->tipo,
            'idCredorDevedor' => $this->idCredorDevedor,
            'dtVencimento' => $this->dtVencimento,
            'dtEmissao' => $this->dtEmissao,
            'dtRealizacao' => $this->dtRealizacao,
            'valorPrevisto' => $this->valorPrevisto,
            'valorRealizado' => $this->valorRealizado,
            'idBanco' => $this->idBanco,
            'idTipoDocumento' => $this->idTipoDocumento,
            'idFormaPagamento' => $this->idFormaPagamento,
            'idTipoConta' => $this->idTipoConta,
            'idPlanoConta' => $this->idPlanoConta,
            'idCliente' => $this->idCliente,
        ]);

        $query->andFilterWhere(['like', 'numDocumento', $this->numDocumento])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
