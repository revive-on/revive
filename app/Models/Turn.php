<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-04-27
 * Time: 오후 4:28
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Turn extends Model
{
    protected $table = 'turns';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'turn_no', 'turn_name',
    ];

}