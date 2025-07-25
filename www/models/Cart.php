<?php

namespace app\models;

use yii\base\Model;

class Cart extends Model
{
    public function addToCart($product, $qty = 1)
    {
        if ($qty == '-1') {
            $qty = -1;
        }

        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->id] = [
                'title' => $product->title,
                'price' => $product->price,
                'qty' => $qty,
                'img' => $product->img,
            ];
        }

        if (isset($_SESSION['cart.qty'])) {
            $_SESSION['cart.qty'] += $qty;
        } else {
            $_SESSION['cart.qty'] = $qty;
        }

        if (isset($_SESSION['cart.sum'])) {
            $_SESSION['cart.sum'] += $qty * $product->price;
        } else {
            $_SESSION['cart.sum'] = $qty * $product->price;
        }

        if ($_SESSION['cart'][$product->id]['qty'] == 0) {
            unset($_SESSION['cart'][$product->id]);
        }
    }

    public function recalc($id)
    {
        if (!isset($_SESSION['cart'][$id])) {
            return false;
        }
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['price'] * $qtyMinus;

        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;

        unset($_SESSION['cart'][$id]);
    }
}
