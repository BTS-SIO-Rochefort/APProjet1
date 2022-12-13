<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function store(Request $request, Forum $forum)
    {
        $forum -> titreForum = $request -> titreForum;
        $forum -> description = $request -> description;
        $forum -> sujet_id = $request -> sujet_id;
        $forum -> save ();
    }


    public function forum(Forum $forum)
    {

}
}
