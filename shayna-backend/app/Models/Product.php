<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','type','description','price','slug','quantity','is_default'
    ];

    protected $hidden = [

    ];

    public function galleries() {

        return $this->hasMany(ProductGallery::class, 'products_id');
    }

    // public function transactionDetails() {

    //     return $this->hasMany(TransactionDetail::class, 'product_id');
    // }
}
