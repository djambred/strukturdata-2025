<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    protected $table = 'clients';
    // protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'phone'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
