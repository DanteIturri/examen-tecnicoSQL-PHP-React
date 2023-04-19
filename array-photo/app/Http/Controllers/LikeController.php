<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like($id, $user_id)
    {
        // Verificar si el usuario ya dio like a la foto
        $existingLike = Like::where('photo_id', $id)->first();
        if ($existingLike) {
            // Si ya existe un like, retornar una respuesta indicando que ya se dio like
            $message = 'La foto ya tiene un like';
            return redirect('/photos')->with("message", $message);
        }

        // Crear un nuevo like
        $photo = Photo::find($id);
        $user = User::find($user_id);
        $like = new Like();
        $like->photo_id = $photo->id;
        $like->user_id = $user->id;
        $like->liked = true;
        $like->save();

        // Retornar una respuesta indicando que el like se registró exitosamente
        return redirect('/photos')->with(['message' => 'Like registrado exitosamente.']);
    }
}
