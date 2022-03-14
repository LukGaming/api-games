<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ImagesGamesController;
use App\Models\games;
use App\Models\ImagesGames;
use Illuminate\Http\Request;

class gamesController extends Controller
{
    public function index(Request $request)
    {
        $games = games::paginate($request->paginate);
        foreach ($games as $game) {
            $game->gameImages;
        }
        return $games;
    }
    public function store(Request $request)
    {
        try {
            $game = new games();
            $game->name = $request->name;
            $game->release_year = $request->release_year;
            $game->description = $request->description;
            // $game->type_of_games_id = $request->type_of_games_id;
            $images = $request->file('images');
            if ($game->save()) {
                foreach ($images as $image) {
                    $image_data;
                    $put_images = new ImagesGamesController();
                    $image_name = $put_images->storeImagesGames($image);
                    $images_games = new ImagesGames();
                    $images_games->caminho_imagem_game = $image_name;
                    $images_games->games_id = $game->id;
                    $images_games->save();
                }
                $game->gameImages;
                return response()->json([
                    'status' => 'success',
                    'message' => 'Game Criado com sucesso!',
                    'game' => $game,
                ]);
            }
        } catch (\Exception$e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }

    }
    public function show($id)
    {
        $game = games::find($id);
        if ($game) {
            $game->gameImages;
            return response()->json([
                'status' => 'success',
                'message' => 'Game recuperado com sucesso!',
                'game' => $game,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'game não encontrado',
            ]);
        }

    }
}
