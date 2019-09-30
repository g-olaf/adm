<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Miembro;

/**
 * MiembroSearch represents the model behind the search form of `app\models\Miembro`.
 */
class MiembroSearch extends Miembro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sexo', 'id_estado_civil', 'id_iglesia', 'id_clasificacion', 'es', 'evangelismo'], 'integer'],
            [['nombre', 'fecha_nacimiento', 'direccion', 'telefono', 'cargos_actuales', 'talentos', 'observaciones'], 'safe'],
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
        $query = Miembro::find();

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
            'sexo' => $this->sexo,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'id_estado_civil' => $this->id_estado_civil,
            'id_iglesia' => $this->id_iglesia,
            'id_clasificacion' => $this->id_clasificacion,
            'es' => $this->es,
            'evangelismo' => $this->evangelismo,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'cargos_actuales', $this->cargos_actuales])
            ->andFilterWhere(['like', 'talentos', $this->talentos])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
