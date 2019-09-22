<?php

namespace app\models;
use yii\base\Model;
class Event extends Model
{
    public $title;
    public $dayStart;
    public $dayEnd;
    public $userID;
    public $description;
    public $repeat = false;

    public function attributeLabels()
    {
        return [
            "title" => 'Какой то заголовок',
            "description" => 'Тут какое то описание',
            "dayStart" => '22.09.2019',
            "dayEnd" => '23.09.2019',
            "userID" => 1,
        ];
    }
}