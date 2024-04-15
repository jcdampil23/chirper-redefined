<?php

namespace App\Models\Chirps;

use App\Models\User;
use Database\Factories\ChirpFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChirpModel extends Model
{
    use HasFactory;
    protected static function newFactory(): Factory
    {
        return ChirpFactory::new();
    }

    protected $table = 'chirps';
    protected $fillable = ['message'];

    // protected $dispatchedEvents = [
    //     'created' => ChirpCreated::class,
    // ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
