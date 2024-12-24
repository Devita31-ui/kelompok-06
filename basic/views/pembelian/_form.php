<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pembelian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pembelian')->textInput() ?>

    <?= $form->field($model, 'Tanggal_Pembelian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Id_Produk')->textInput() ?>

    <?= $form->field($model, 'Id_Pelanggan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
