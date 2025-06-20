<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import class BelongsTo

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Mendefinisikan relasi bahwa setiap Blog "milik" satu User.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
