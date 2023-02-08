<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'type'];

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id');
    }

    public function client()
    {
        return $this->hasOne(Client::class, 'user_id');
    }

    public function transporter()
    {
        return $this->hasOne(Transporter::class, 'user_id');
    }

}
