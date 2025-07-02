<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
