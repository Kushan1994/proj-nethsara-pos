<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    public const ADMIN = 1;
    public const ACCOUNTANT = 2;
    public const CASHIER = 3;
    public const MANAGER = 4;

    protected $fillable = ['id','role'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
