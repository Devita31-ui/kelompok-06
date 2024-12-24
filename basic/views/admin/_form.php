<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Penjual')->textInput() ?>

    <?= $form->field($model, 'Nama_Penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_penjual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NoHp_Penjual')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
