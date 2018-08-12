<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Work;

/**
 * WorkSearch represents the model behind the search form about `common\models\Work`.
 */
class WorkSearch extends Work
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'work_user_id', 'work_created_at', 'work_status', 'work_address_id', 'star'], 'integer'],
            [['massagetype', 'name_office', 'description', 'money1', 'tel', 'location', 'img', 'imgs', 'timework'], 'safe'],
            [['lat', 'lng'], 'number'],
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
        $query = Work::find();

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
            'lat' => $this->lat,
            'lng' => $this->lng,
            'work_user_id' => $this->work_user_id,
            'work_created_at' => $this->work_created_at,
            'work_status' => $this->work_status,
            'work_address_id' => $this->work_address_id,
            'star' => $this->star,
        ]);

        $query->andFilterWhere(['like', 'massagetype', $this->massagetype])
            ->andFilterWhere(['like', 'name_office', $this->name_office])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'money1', $this->money1])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'imgs', $this->imgs])
            ->andFilterWhere(['like', 'timework', $this->timework]);

        return $dataProvider;
    }
}
