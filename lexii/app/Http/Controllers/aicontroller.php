<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aiResponse;
use App\Models\emotions;
use App\Models\Answer;
use App\Http\Resources\LexiiResource;
class aicontroller extends Controller
{

    function add_ai(Request $req)
    {
        
        $id = $req->id;
        $aiResponse = $req->ai_response;
        
        // Check if the record with the given ID already exists
        $existingaiResponse = aiResponse::find($id);
    
        // If the record doesn't exist, create a new instance
        if (!$existingaiResponse) {
            $existingaiResponse = new aiResponse;
            $existingaiResponse->id = $id;
        }
    
        // Update or set the AI response value
        $existingaiResponse->ai_response = $aiResponse;
    
        try {
            // Save the changes
            $result = $existingaiResponse->save();
    
            if ($result) {
                return ["Data successfully saved"];
            } else {
                return ["Data not successfully saved"];
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            // Handle the unique constraint violation error
            return ["Error: Duplicate entry for key 'PRIMARY'"];
        }
    }

    function get_ai($id)
    {
        return aiResponse::find($id);
    }
    public function get_emo($id)
    {
        return emotions::find($id);
    }
    public function get_answer($id)
    {
        return Answer::find($id);
    }

    function emo_post(Request $req)
{
    
    $id = $req->id;
    $emotion = $req->emotion;
    

    // Find the record by ID
    $emotions = Emotions::find($id);

    // If the record doesn't exist, create a new instance
    if (!$emotions) {
        $emotions = new Emotions;
        $emotions->id = $id;
    }

    // Update or set the emotion value
    $emotions->emotion = $emotion;

    // Save the changes
    $emotions->save();

    return ["Data successfully saved"];
}

}
