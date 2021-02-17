<?php if ($products): ?>
<?php foreach ($products as $product){ ?>
        <p><?php echo $product->name?></p>
        <p>Price<?php echo $product->price?></p>
 <?php } ?>
<?php endif; ?>
