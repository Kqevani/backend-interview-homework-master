<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['ab_test_id', 'name', 'targeting_ratio'];

    public function abTest()
    {
        return $this->belongsTo(AbTest::class, 'ab_test_id');
    }
}
