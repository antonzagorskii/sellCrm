<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\Backend\models\ProductAttributeValue */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Product Attribute Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-attribute-value-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'product_id' => $model->product_id, 'attribute_id' => $model->attribute_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'product_id' => $model->product_id, 'attribute_id' => $model->attribute_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'attribute_id',
            'value',
        ],
    ]) ?>

</div>
