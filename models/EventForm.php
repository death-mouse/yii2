<?php
namespace app\models;
use yii\base\Model;
class EventForm extends Model
{
    public $title;
    public $description;
    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'description' => "Описание события"
        ];
    }
    public function rules()
    {
        return [
            [['title', 'description'], 'required' ]
        ];
    }
}