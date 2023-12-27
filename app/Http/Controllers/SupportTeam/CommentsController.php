<?php

namespace App\Http\Controllers\SupportTeam;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->user_type);
        if(Auth::user()->user_type != 'super_admin'){
            $comments = Comment::where('user_id', Auth::user()->id)->latest()->get();
        }else{

            $comments = Comment::latest()->get();
        }

        return view('pages.support_team.timetables.comments', compact('comments'));
    }


    public function show($id){
        $comment = Comment::findOrFail($id);

        return view('pages.support_team.timetables.comments', compact('comment'));

    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
        ]);

        //Comment::create($validatedData);

        // Create a new Comment instance
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->input('comment');


        // Save the comment
        $comment->save();

        return redirect()->back()->with('success', 'Comment posted successfully.');
    }

    public function update($id){

    }

    public function destroy($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('flash_success', 'Comment deleted successfully.');
    }
}
