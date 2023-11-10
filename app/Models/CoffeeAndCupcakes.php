<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeAndCupcakes extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['flavor'] ?? false) {
            $query->where('flavors', 'like', '%' . request('flavor') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('productName', 'like', '%' . request('search') . '%')
                ->orWhere('productDescription', 'like', '%' . request('search') . '%')
                ->orWhere('flavors', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
