<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'massagetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_office')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'money1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lng')->textInput() ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_user_id')->textInput() ?>

    <?= $form->field($model, 'work_created_at')->textInput() ?>

    <?= $form->field($model, 'work_status')->textInput() ?>

    <?= $form->field($model, 'work_address_id')->textInput() ?>

    <?= $form->field($model, 'timework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'star')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
