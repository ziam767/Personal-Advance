<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'สังกัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">
        <div class="box box-warning box-solid">
            <div class="box-header with-border ">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                <div class="box-tools pull-right">  
                    <?= Html::a('<span class="fa fa-plus"><span> เพิ่ม', ['create'], ['class' => 'btn bg-default ']) ?>
                    
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div style="display: block;" class="box-body">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        //'id',
                        'name',
                        
                        [
                        'attribute'=>'status',
                        'contentOptions'=>['class'=>'text-center'],
                        'content'=>function($data){
                            $status =[
                                '0'=>"<label class='label label-danger'>ไม่ใช้งาน</label>",
                                '1'=>"<label class='label label-success'>ใช้งาน</label>",
                                
                            ];
                            return $status[$data->status];
                        },
                        'filter'=>  Html::activeDropDownList($searchModel, 'status',['0'=>'ไม่ใช้งาน','1'=>'ใช้งาน'],['class'=>'form-control','prompt' => '--เลือกสถานะ--']),
                    ],
                        [
                        'class' => 'yii\grid\ActionColumn',
                        ],
                    ],
                ]);
                ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
  
</div>
