<?php

namespace App;

class Cart
{
    public $items=null;

    public function __construct($oldcart)
    {
        if ($oldcart){
        $this->items = $oldcart->items;
    }
    }
    public function add($item,$id){
        $this->items[$id] = ['item'=>$item];
    }
}
