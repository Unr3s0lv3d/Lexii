<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emotioncontroller extends Controller
{
    function emo_post(Request $req)
    {
        $emo_post = new emotion;
        $emo_post->id=$req->id;
        $emo_post->emo_post=$req->emo_post;
        $result=$emo_post->save();
        {
            return ["Data succesvol opgeslagen"];
        }
    }
}
