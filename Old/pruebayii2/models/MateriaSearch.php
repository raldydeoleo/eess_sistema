<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Materia;

/**
 * MateriaSearch represents the model behind the search form about `app\models\Materia`.
 */
class MateriaSearch extends Materia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_materia', 'cantidad_credito', 'hora_practica', 'hora_teoria'], 'integer'],
            [['materia_nombre'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Materia::find();

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
            'id_materia' => $this->id_materia,
            'cantidad_credito' => $this->cantidad_credito,
            'hora_practica' => $this->hora_practica,
            'hora_teoria' => $this->hora_teoria,
        ]);

        $query->andFilterWhere(['like', 'materia_nombre', $this->materia_nombre]);

        return $dataProvider;
    }
}
