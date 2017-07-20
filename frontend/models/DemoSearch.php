<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Demo;

/**
 * DemoSearch represents the model behind the search form about `app\models\Demo`.
 */
class DemoSearch extends Demo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'test6', 'created_at', 'updated_at'], 'integer'],
            [['test1', 'test2', 'test3', 'test4', 'test5'], 'safe'],
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
        $query = Demo::find();

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
            'test6' => $this->test6,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'test1', $this->test1])
            ->andFilterWhere(['like', 'test2', $this->test2])
            ->andFilterWhere(['like', 'test3', $this->test3])
            ->andFilterWhere(['like', 'test4', $this->test4])
            ->andFilterWhere(['like', 'test5', $this->test5]);

        return $dataProvider;
    }
}
