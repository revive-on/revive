<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-04-27
 * Time: 오후 4:36
 */

namespace App\Http\Controllers;

use App\Models\Turn;
use App\User;


class TurnsController extends Controller
{
    public function index($sTurnId)
    {
        if (empty($sTurnId))
            $sTurnId = 1;
        $aAttribute = Turn::all('name', 'id')->where('id', "=", $sTurnId);
        return view('templates.turn', array(
            'turn' => $aAttribute[$sTurnId - 1]['name'],
            'turn2' => "hi",
            'turn3' => "턴",
            'id' => $sTurnId

        ));
    }
}