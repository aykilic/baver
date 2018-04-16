<?php
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    public function categories() {
        return $this->belongsToMany('Category', 'products_categories');
    }

}