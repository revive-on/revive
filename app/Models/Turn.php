<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-04-27
 * Time: 오후 4:28
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    protected $table = 'turn';

    /** @var string 턴 이름 */
    public $sTurnName;

    /** @var int 턴 번호 */
    public $iTurnNo;

}