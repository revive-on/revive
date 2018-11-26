<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-11-18
 * Time: 오후 10:45
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $areas
 */
class Map extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }
}