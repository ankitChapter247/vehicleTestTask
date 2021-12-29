<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hub;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'hub_id',
    ];

    public function hub()
    {
        return $this->belongsTo(Hub::class);
    }
}
