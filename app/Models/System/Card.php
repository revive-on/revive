<?php

namespace App\Models\System;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\System\Card
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Card whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Card whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Card whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Card whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Card extends Model
{
    protected $fillable = ['name', 'image'];
}
