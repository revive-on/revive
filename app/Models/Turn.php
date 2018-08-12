<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-04-27
 * Time: 오후 4:28
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\Turn
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static Builder|\App\Models\Turn whereCreatedAt($value)
 * @method static Builder|\App\Models\Turn whereId($value)
 * @method static Builder|\App\Models\Turn whereName($value)
 * @method static Builder|\App\Models\Turn whereNumber($value)
 * @method static Builder|\App\Models\Turn whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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