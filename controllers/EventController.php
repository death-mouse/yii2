<?php

namespace app\controllers;
use app\models\Event;
use app\models\EventForm;
use app\models\Day;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
class EventController extends Controller
{
    public function actionIndex()
    {
        return 'Event@index';
    }
    public function actionEventDescription()
    {
        $events = new Event();
        $event = $events->attributeLabels();
        return $this->render('event-description', ['event'=>$event]);
    }
    public function actionView()
    {
        $format = 'Y-m-d H:i:s';
        $dateStart = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
        $dateEnd =  mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
        
        $arr = [
            ['title' => "Первое событие", 'description' => "Описание первого события", 'dayStart' => $dateStart,'dayEnd' =>$dateEnd],
            ['title' => "Второе событие", 'description' => "Описание второго события", 'dayStart' => $dateStart,'dayEnd' =>$dateEnd],
        ];
        return $this->render('view', ['events' => $arr]);
        //return 'Event@view';
    }
    public function actionEdit()
    {
        return $this->render('edit');
    }
    public function actionCreate()
    {
        return 'Event@create';
    }
    public function actionAddEvent()
    {
        $form = new EventForm();
        return $this->render('add-event', ['form' => $form]);
    }
    public function actionSubmit() {
        $content = \Yii::$app->request->post();
        return $this->render('submit', ['content'=>$content]);
    }
    public function actionArrayHelper()
    {
        $arr = [
            [
                'id' => 1,
                'login' => 'admin',
            ],
            [
                'id' => 2,
                'login' => 'manager',
            ],
        ];
        $logins = ArrayHelper::getColumn($arr, 'login');
        $loginFirst = ArrayHelper::getValue($arr, '0.user_info.data.email'); 
    }
}