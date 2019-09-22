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
        return 'Event@view';
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