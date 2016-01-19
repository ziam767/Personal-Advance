<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Offices */

$this->title = $model->name_th;
$this->params['breadcrumbs'][] = ['label' => 'สำนัก/ศูนย์/กอง', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-view">

    
    
    
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
            <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name_th',
            'email:email',
            'department_id',
            'address:ntext',
            'position',
            'status',
            'tel',
            'fax',
            'logo',
        ],
    ]) ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->

</div>
