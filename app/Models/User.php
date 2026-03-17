<?php

namespace App\Models;

use Velolia\Database\Model;
use Velolia\Auth\Access\Authorizable;
use Velolia\Auth\Access\HasRoles;
use Velolia\Auth\Aura\HasApiTokens;

class User extends Model
{
    use Authorizable, HasRoles, HasApiTokens;

    protected string $table = 'users';
    protected array $fillable = ['name', 'email', 'password', 'remember_token'];
}