<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Massagetype */

$this->title = 'Create Massagetype';
$this->params['breadcrumbs'][] = ['label' => 'Massagetypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="massagetype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
