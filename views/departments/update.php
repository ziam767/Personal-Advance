<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'แก้ไข: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'สังกัด', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="departments-update">

    <div class="box box-warning box-solid">
        <div class="box-header with-border ">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right"> 
                <?= Html::a('<span class="fa fa-plus"><span> เพิ่ม', ['create'], ['class' => 'btn']) ?>
                

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div style="display: block;" class="box-body">
            <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
