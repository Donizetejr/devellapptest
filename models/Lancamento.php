<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lancamento".
 *
 * @property int $id
 * @property int $tipo
 * @property int $idCredorDevedor
 * @property string $numDocumento
 * @property string $dtVencimento
 * @property string $dtEmissao
 * @property string $dtRealizacao
 * @property double $valorPrevisto
 * @property double $valorRealizado
 * @property int $idBanco
 * @property int $idTipoDocumento
 * @property int $idFormaPagamento
 * @property int $idTipoConta
 * @property int $idPlanoConta
 * @property string $descricao
 * @property int $idCliente
 *
 * @property Banco $banco
 * @property Cliente $cliente
 * @property Credordevedor $credorDevedor
 * @property Formapagamento $formaPagamento
 * @property Planoconta $planoConta
 * @property Tipoconta $tipoConta
 * @property Tipodocumento $tipoDocumento
 */
class Lancamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lancamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'idCredorDevedor', 'idBanco', 'idTipoDocumento', 'idFormaPagamento', 'idTipoConta', 'idPlanoConta', 'idCliente'], 'required'],
            [['tipo', 'idCredorDevedor', 'idBanco', 'idTipoDocumento', 'idFormaPagamento', 'idTipoConta', 'idPlanoConta', 'idCliente'], 'integer'],
            [['dtVencimento', 'dtEmissao', 'dtRealizacao'], 'safe'],
            [['valorPrevisto', 'valorRealizado'], 'number'],
            [['numDocumento'], 'string', 'max' => 40],
            [['descricao'], 'string', 'max' => 120],
            [['idCliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idCliente' => 'id']],
            [['idCredorDevedor'], 'exist', 'skipOnError' => true, 'targetClass' => Credordevedor::className(), 'targetAttribute' => ['idCredorDevedor' => 'id']],
            [['idFormaPagamento'], 'exist', 'skipOnError' => true, 'targetClass' => Formapagamento::className(), 'targetAttribute' => ['idFormaPagamento' => 'id']],
            [['idPlanoConta'], 'exist', 'skipOnError' => true, 'targetClass' => Planoconta::className(), 'targetAttribute' => ['idPlanoConta' => 'id']],
            [['idTipoConta'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoconta::className(), 'targetAttribute' => ['idTipoConta' => 'id']],
            [['idTipoDocumento'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumento::className(), 'targetAttribute' => ['idTipoDocumento' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'idCredorDevedor' => 'Id Credor Devedor',
            'numDocumento' => 'Num Documento',
            'dtVencimento' => 'Dt Vencimento',
            'dtEmissao' => 'Dt Emissao',
            'dtRealizacao' => 'Dt Realizacao',
            'valorPrevisto' => 'Valor Previsto',
            'valorRealizado' => 'Valor Realizado',
            'idBanco' => 'Id Banco',
            'idTipoDocumento' => 'Id Tipo Documento',
            'idFormaPagamento' => 'Id Forma Pagamento',
            'idTipoConta' => 'Id Tipo Conta',
            'idPlanoConta' => 'Id Plano Conta',
            'descricao' => 'Descricao',
            'idCliente' => 'Id Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanco()
    {
        return $this->hasOne(Banco::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id' => 'idCliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCredorDevedor()
    {
        return $this->hasOne(Credordevedor::className(), ['id' => 'idCredorDevedor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormaPagamento()
    {
        return $this->hasOne(Formapagamento::className(), ['id' => 'idFormaPagamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanoConta()
    {
        return $this->hasOne(Planoconta::className(), ['id' => 'idPlanoConta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoConta()
    {
        return $this->hasOne(Tipoconta::className(), ['id' => 'idTipoConta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoDocumento()
    {
        return $this->hasOne(Tipodocumento::className(), ['id' => 'idTipoDocumento']);
    }
}
