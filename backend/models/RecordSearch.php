<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Record;

/**
 * RecordSearch represents the model behind the search form about `backend\models\Record`.
 */
class RecordSearch extends Record
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['record_id', 'cd_qty', 'onorder', 'show'], 'integer'],
            [['production_name', 'album_name', 'singer', 'submitDate', 'modifiedDate'], 'safe'],
            [['price'], 'number'],
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
        $query = Record::find();

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
            'record_id' => $this->record_id,
            'price' => $this->price,
            'cd_qty' => $this->cd_qty,
            'onorder' => $this->onorder,
            'submitDate' => $this->submitDate,
            'modifiedDate' => $this->modifiedDate,
            'show' => $this->show,
        ]);

        $query->andFilterWhere(['like', 'production_name', $this->production_name])
            ->andFilterWhere(['like', 'album_name', $this->album_name])
            ->andFilterWhere(['like', 'singer', $this->singer]);

        return $dataProvider;
    }
}
