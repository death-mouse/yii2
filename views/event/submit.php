<?php

use yii\helpers\ArrayHelper;
?>

<h2>Событие успешно добавлено:</h2>
<br>
<h4>Название - <?php echo ArrayHelper::getValue($content, 'EventForm.title'); ?></h4>
<h4>Описание события - <?php echo ArrayHelper::getValue($content, 'EventForm.description'); ?></h4>