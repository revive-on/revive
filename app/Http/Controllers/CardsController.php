<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-05-17
 * Time: 오후 3:58
 */

namespace App\Http\Controllers;

use App\Models\System\Card;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;


class CardsController
{
    public function create(Generator $faker)
    {
        $card = new Card();
        $card->name = $faker->lexify('??????');
        $card->image = $faker->boolean ? 'tom' : 'jerry';
        $card->save();

        return response($card->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function index()
    {
        return response(Card::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->name = $request->name;
        $card->save();

        return response(null, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        Card::destroy($id);

        return response(null, Response::HTTP_OK);
    }
}