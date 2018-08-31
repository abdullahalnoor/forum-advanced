<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Thread;

class CommentController extends Controller
{

    public function addThreadComment(Request $request,Thread $thread){
        $this->validate($request,[
            'body'=> 'required',
        ]);
        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;
        $thread->comments()->save($comment);
        return back();
    }

     public function addReplyComment(Request $request,Comment $comment){
        $this->validate($request,[
            'body'=> 'required',
        ]);
        // dd($comment->user_id);
        if($comment->user_id == auth()->user()->id){
            $reply = new Comment();
            $reply->body = $request->body;
            $reply->user_id = auth()->user()->id;
            $comment->comments()->save($reply);
        }
        return back();
    }

    

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $this->validate($request,[
            'body'=> 'required',
        ]);
            if(auth()->user()->id == $comment->user_id){
                $comment->update($request->all());
            }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if(auth()->user()->id == $comment->user_id){
         $comment->delete();
        }
        return back();
    }
}
