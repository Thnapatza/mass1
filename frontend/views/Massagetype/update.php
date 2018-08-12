<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Massagetype */

$this->title = 'Update Massagetype: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Massagetypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="massagetype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
