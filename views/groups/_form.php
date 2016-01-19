<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Offices;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="groups-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_id')->dropDownList(ArrayHelper::map(Offices::find()->where('status="1"')->all(), 'id', 'name_th'), ['prompt' => '--เลือกสังกัด--']) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0'=>'ไม่ใช้งาน', '1'=>'ใช้งาน', ], ['prompt' => '--เลือกสถานะ--']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
