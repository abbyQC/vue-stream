<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function update(Request $request, Reply $reply)
    {
        $reply->body = $request->get('body');
        $reply->save();
        return response();
    }

    public function destroy(Reply $reply)
    {
        $reply->delete();
        $reply->save();
        return response();
    }
}
