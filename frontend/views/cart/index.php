<?php
 foreach ($products as $product){ ?>
        <p><?php echo $product->name?></p>
        <p>Price<?php echo $product->price?></p>
        <p>Total<?php echo $product->price*$productsInCart[$product->id]?></p>
        <p>Count <?php echo $productsInCart[$product->id] ?></p>
 <?php } ?>