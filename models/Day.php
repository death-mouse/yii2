<?php
namespace app\models;
use yii\base\Model;
class Day extends Model
{
    public $workday = false; // true - рабочий, false - выходной
    public $activities;
}