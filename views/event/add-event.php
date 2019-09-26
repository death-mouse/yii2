<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$forms = ActiveForm::begin([
        'id' => 'Event',
        ]);
$forms->action = yii\helpers\Url::toRoute('/event/submit');
echo $forms->field($form, 'title');
echo $forms->field($form, 'description')->textarea();
echo Html::submitButton('Создать', ['class'=>'btn btn-success', 'name' => 'Event',]);
$forms = ActiveForm::end();
?>