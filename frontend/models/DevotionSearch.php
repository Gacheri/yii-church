<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Devotion;

/**
 * DevotionSearch represents the model behind the search form of `frontend\models\Devotion`.
 */
class DevotionSearch extends Devotion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['devId', 'createdBy'], 'integer'],
            [['day', 'title', 'script', 'verse', 'description', 'lesson', 'createdAt'], 'safe'],
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
        $query = Devotion::find();

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
            'devId' => $this->devId,
            'createdBy' => $this->createdBy,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'script', $this->script])
            ->andFilterWhere(['like', 'verse', $this->verse])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'lesson', $this->lesson]);

        return $dataProvider;
    }
}
