<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Embarquement extends Model
{
    public function index()
    {
        return view('embarquement.index');
    }
}
