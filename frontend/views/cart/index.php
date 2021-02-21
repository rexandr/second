<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php $totalPrice = 0; ?>
<?php if ($products): ?>
<?php foreach ($products as $product){ ?>
        <div>
        <p>Tovar - <?php echo $product->name?></p>
        <p>Price - <?php echo $product->price?></p>
        <p>Total - <?php echo $product->price * $productsInCart[$product->id]?></p>
        <p>Total - <?php echo $productsInCart[$product->id]?></p>
        </div>
        <div>
            <?php echo  Html::a('+', Url::to(['cart/add', 'id' => $product->id]))?>
            <?php echo  Html::a('-', Url::to(['cart/del', 'id' => $product->id]))?>
        </div>
        <div>
            <?php echo  Html::a('X', Url::to(['cart/delete', 'id' => $product->id]))?>
        </div>
        <hr>
        <?php $totalPrice += $product->price * $productsInCart[$product->id]?>
 <?php } ?>
<p> Total price  - <?php echo  $totalPrice; ?></p>
<p><?php echo Html::a('Checkout', Url::to(['cart/checkout']))?></p>

<?php endif; ?>



