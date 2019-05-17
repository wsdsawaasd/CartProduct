<?php

use Illuminate\Database\Seeder;

class TableProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = new \App\Product();
        $product->name ='Cocacola';
        $product->price='1000';
        $product->old_price ='2000';
        $product->description='tot cho tieu hoa';
        $product->save();
        $product = new \App\Product();
        $product->name ='cafe';
        $product->price='1200';
        $product->old_price ='40000';
        $product->description='overnight';
        $product->save();
        $product = new \App\Product();
        $product->name ='redbull';
        $product->price='1500';
        $product->old_price ='20000';
        $product->description='chat kich thich';
        $product->save();
    }
}
