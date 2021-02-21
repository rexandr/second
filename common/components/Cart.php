<?php
namespace common\components;

use yii\base\Component;

class Cart extends Component
{
    public function add($id)
    {
        $id = (int)$id;
        $productInCart = [];
        if (isset($_SESSION['products']))
        {
            $productInCart = $_SESSION['products'];
        }
        if (array_key_exists($id, $productInCart))
        {
            $productInCart[$id]++;
        }
        else
        {
            $productInCart[$id] = 1;
        }
        $_SESSION['products'] = $productInCart;
        return true;
    }

    public function del($id)
    {
        $id = (int)$id;
        $productInCart = [];
        if (isset($_SESSION['products']))
        {
            $productInCart = $_SESSION['products'];
        }
        if (array_key_exists($id, $productInCart))
        {
            if ($productInCart[$id]>1)
            {
                $productInCart[$id]--;
            }
            else
            {
                unset($productInCart[$id]);
            }
        }

        $_SESSION['products'] = $productInCart;
        return true;
    }

    public function count()
    {
        if (isset($_SESSION['products']))
        {
            return array_sum($_SESSION['products']);
        }
        return 0;
    }

    public function products()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
            return true;
        }
        else{
            return false;
        }
    }

    public function deleteProduct($id)
    {
        if (isset($_SESSION['products']))
        {
            $productsInCart = $_SESSION['products'];
            if (array_key_exists($id, $productsInCart))
            {
                unset($productsInCart[$id]);
                $_SESSION['products'] = $productsInCart;
            }
        }
        return true;
    }
}