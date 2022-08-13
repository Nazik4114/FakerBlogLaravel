<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Author;
use App\Models\Coments;
class PostController extends Controller
{
    
    public function show(){
return view('ShowAllPosts',['posts'=>Posts::paginate(15),
'search'=>""
]);
    }

    public function showOne($id){

        $post=Posts::find($id);
        $author=Author::find($post->user_id);
        $coments=Coments::where('post_id', $id)->get();
        return view('OnePost',[
            'post'=>$post,
            'author'=>$author,
            'coments'=>$coments
        ]);
            }

    public function aboutAuthor($id,$post_id){

        $author=Author::find($id);
        return view('AboutAuthor',[
            'post_id'=>$post_id,
            'author'=>$author,
        ]);
    }

    public function search(Request $req){
        return view('ShowAllPosts',[
            'posts'=> Posts::where('title', 'LIKE', '%'.$req->search.'%')->paginate(15),
            'search'=>$req->search
        ]);
    }
}
