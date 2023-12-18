<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list()
    {
        $comment = Comment::all();
        return view ('admin.comment.list',compact('comment'));
    }
    public function del($id){
        Comment::where('id' , '=' , $id) ->delete();
        return redirect()->back() -> with('success','Bình Luận đã được xóa thành công');
    }
}
