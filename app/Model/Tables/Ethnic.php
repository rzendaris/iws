<?php

namespace App\Model\Tables;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Role
 *
 * @author RafiZendaris
 */
class Ethnic extends Model
{
    use \Awobaz\Compoships\Compoships;

    protected $table = 'm_ethnic';

    protected $fillable = [
        'id',
        'name',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

}
