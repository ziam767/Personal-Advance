<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = 'แก้ไข: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'กลุ่ม/ฝ่าย/ส่วน', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="groups-update">


    
        
    <div class="box box-warning box-solid">
        <div class="box-header with-border ">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right"> 
                <?= Html::a('<span class="fa fa-plus"><span> เพิ่ม', ['create'], ['class' => 'btn']) ?>
               <?= Html::a('<span class="fa fa-edit"><span> แก้ไข', ['update', 'id' => $model->id], ['class' => 'btn']) ?>
                <?=
                Html::a('<span class="fa fa-trash"><span> ลบ', ['delete', 'id' => $model->id], [
                    'class' => 'btn',
                    'data' => [
                        'confirm' => 'ต้องการลบใช่ไหม?',
                        'method' => 'post',
                    ],
                ])
                ?>

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div style="display: block;" class="box-body">
          
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
