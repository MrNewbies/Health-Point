<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'genders';

    public $primarykey = 'id';

    public function getgender(): HasMany
    {
        return $this->hasMany(users::class, 'genderid', 'id');
    }
}
