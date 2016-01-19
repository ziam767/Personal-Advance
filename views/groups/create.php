<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Groups */

$this->title = 'เพิ่ม';
$this->params['breadcrumbs'][] = ['label' => 'กลุ่ม/กอง/ฝ่าย', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-create">

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
