<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends \Illuminate\Foundation\Auth\User
{
    use HasFactory;

    protected $table = 'account';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
      'id',
      'username',
      'email',
      'password',
    ];


}
