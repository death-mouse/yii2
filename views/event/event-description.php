<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
?>

    <br><br>

    <p>Код пользователя - <?php echo ArrayHelper::getValue($event, 'userID')?></p>

    <p>Название - <?php echo ArrayHelper::getValue($event, 'title')?></p>
    <p>Описание - <?php echo ArrayHelper::getValue($event, 'description')?></p>
    <p>Дата начала - <?php echo ArrayHelper::getValue($event, 'dayStart')?></p>
    <p>Дата окончания - <?php echo ArrayHelper::getValue($event, 'dayEnd')?></p>


<?php