<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Order extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ['invoice_id', 'product_id', 'qty', 'price'];
    
    public function reviews() {
        return $this -> hasMany(Review::class);
    }

    public function product() {
        return $this -> belongsTo(Product::class);
    }
}
