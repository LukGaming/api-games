<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
class ImagesGamesController extends Controller
{
    public function storeImagesGames($image)
    {
        $picName = $image->getClientOriginalName();
        $path = 'uploads' . DIRECTORY_SEPARATOR . 'games' . DIRECTORY_SEPARATOR;
        $picName = uniqid() . '_' . $picName;
        $image_name = $path . $picName;
        $destinationPath = public_path($path);
        File::makeDirectory($destinationPath, 0777, true, true);
        $image->move(public_path($path), $picName);
        return $image_name;
    }
}
