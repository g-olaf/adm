<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Iglesia;

/**
 * IglesiaSearch represents the model behind the search form of `app\models\Iglesia`.
 */
class IglesiaSearch extends Iglesia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_seccion', 'id_estado'], 'integer'],
            [['nombre', 'geolocalizacion', 'localidad', 'poblacion', 'codigo_postal', 'direccion', 'referencias', 'pastor1', 'pastor2', 'telefono', 'email', 'timecreated'], 'safe'],
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
        $query = Iglesia::find();

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
            'id_seccion' => $this->id_seccion,
            'id_estado' => $this->id_estado,
            'timecreated' => $this->timecreated,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'geolocalizacion', $this->geolocalizacion])
            ->andFilterWhere(['like', 'localidad', $this->localidad])
            ->andFilterWhere(['like', 'poblacion', $this->poblacion])
            ->andFilterWhere(['like', 'codigo_postal', $this->codigo_postal])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'referencias', $this->referencias])
            ->andFilterWhere(['like', 'pastor1', $this->pastor1])
            ->andFilterWhere(['like', 'pastor2', $this->pastor2])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
