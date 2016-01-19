<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'กลุ่ม/ฝ่าย/ส่วน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="groups-index">

    
     <div class="box box-warning box-solid">
        <div class="box-header with-border ">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
            <div class="box-tools pull-right"> 
                <?= Html::a('<span class="fa fa-plus"><span> เพิ่ม', ['create'], ['class' => 'btn']) ?>
               

            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div style="display: block;" class="box-body">
           <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'office_id',
            'name',
            
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->


</div>
