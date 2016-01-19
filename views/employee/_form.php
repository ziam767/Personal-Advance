<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->dropDownList([ 'นาย' => 'นาย', 'นาง' => 'นาง', 'นางสาว' => 'นางสาว', 'ว่าที่ร้อยตรี' => 'ว่าที่ร้อยตรี', 'อื่นๆ' => 'อื่นๆ', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'ข้าราชการ' => 'ข้าราชการ', 'พนักงานราชการ' => 'พนักงานราชการ', 'ลูกจ้างประจำ' => 'ลูกจ้างประจำ', 'ลูกจ้างชั่วคราว/จ้างเหมาบริหาร' => 'ลูกจ้างชั่วคราว/จ้างเหมาบริหาร', 'อื่นๆ' => 'อื่นๆ', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_id')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'ทำงาน' => 'ทำงาน', 'เกษียณ/หมดสัญญา/ลาออก' => 'เกษียณ/หมดสัญญา/ลาออก', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
