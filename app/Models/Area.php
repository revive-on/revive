<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-11-18
 * Time: 오후 10:46
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function maps(){
        return $this->belongsToMany(Map::class);
    }
}