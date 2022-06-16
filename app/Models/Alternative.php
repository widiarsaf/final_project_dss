<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Alternative extends Model
{
    use HasFactory;
    protected $table = 'alternative';
    protected $guarded = [];
    public $timestamps = false;
    public function location(){
        return $this->belongsTo(location::class, 'id_location');
    }
}
