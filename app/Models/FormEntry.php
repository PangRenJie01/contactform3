<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    protected $table = 'form_entries';

    protected $fillable = ['name', 'email', 'contact', 'remark'];

    
}
