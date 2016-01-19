<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OfficesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หน่วยงาน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-index">




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
                   
                    [
                        'attribute' => 'department_id',
                        'contentOptions' => ['class' => 'text-center'],
                        'content' => function($data) {
                    $status = [
                        
                        '1' => "<label class='label label-success'>ส่วนกลาง</label>",
                        '2' => "<label class='label label-warning'>ส่วนภูมิภาค</label>",
                    ];
                    return $status[$data->department_id];
                },
                        'filter' => Html::activeDropDownList($searchModel, 'department_id', ['2' => 'ส่วนภูมิภาค', '1' => 'ส่วนกลาง'], ['class' => 'form-control', 'prompt' => '--เลือกสถานะ--']),
                    ],
                    //'id',
                    'name_th',
                    //'email:email',
                    'address:ntext',
                    // 'position',
                    // 'status',
                    // 'tel',
                    // 'fax',
                    // 'logo',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->


</div>
