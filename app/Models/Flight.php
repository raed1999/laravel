<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory, HasUuids;

    /* Table */
    protected $table = 'tbl_users';

    /* PK */
    protected $primaryKey = 'users_id';

    public $incrementing = false;

}
