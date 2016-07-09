<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Books');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Books'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        //'model' => $model,
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'Книга',
                'value' => 'title',
            ],
            [
                'attribute' => 'Обложка',
                'value' => 'img_url',
                'format' => ['image',['width'=>'100']],
            ],
            [
                'attribute' => 'Ссылка на книгу',
                'value' => 'url',
                'format' => 'url'
            ],
            [
                'attribute' => 'Описание',
                'value' => 'description',
            ],
            [
                'attribute'=>'Автор',
                'value'=>'author'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
