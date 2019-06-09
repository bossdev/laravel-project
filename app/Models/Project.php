<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $guarded = array('id');
    protected $fillable = array('name', 'amount_worker', 'start_at', 'finish_at', 'status');
}
