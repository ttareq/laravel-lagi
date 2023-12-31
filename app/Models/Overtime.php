<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends Model
{
    use HasFactory;
    public $guarded = [];
    public $table = 'overtimes';

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
