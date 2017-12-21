<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Assignment;

/**
 * AssignmentSearch represents the model behind the search form about `backend\models\Assignment`.
 */
class AssignmentSearch extends Assignment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['assignment_id', 'assignment_course_id'], 'integer'],
            [['assignment_file', 'assignment_uploaded_date'], 'safe'],
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
        $query = Assignment::find();

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
            'assignment_id' => $this->assignment_id,
            'assignment_course_id' => $this->assignment_course_id,
            'assignment_uploaded_date' => $this->assignment_uploaded_date,
        ]);

        $query->andFilterWhere(['like', 'assignment_file', $this->assignment_file]);

        return $dataProvider;
    }
}
