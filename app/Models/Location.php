<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alternative;
class Location extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $guarded = [];
    public $timestamps = false;
        public function alternative(){
        return $this->hasMany(Alternative::class, 'id');
    }
}
