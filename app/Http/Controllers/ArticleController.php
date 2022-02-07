<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\RemarkRequest;
use App\Models\Article;
use App\Helpers\UploadsFile;
use App\Models\Remark;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function createArticle(ArticleRequest $articleRequest)
    {
       $photo = $articleRequest->file('image');
       if($photo) {
           $imageName = uniqid('image_',true).'.'.$photo->getClientOriginalExtension();
           $photo->move(UploadsFile::getUploadPAth('profile_photos'),$imageName);
       }

       Article::create([
           'image'=>$photo,
           'title'=>$articleRequest->get('title'),
           'content'=>$articleRequest->get('content')
       ]);

       return back();
    }

    function allArticle()
    {
        $articles = Article::simplePaginate(2);
        return view('articles.allArticle',compact('articles'));
    }

    function viewArticle($id)
    {
        $article = Article::with('remarks')->find($id);
        return view('articles.viewArticle',compact('article'));
    }

    function createRemark(RemarkRequest $remarkRequest, $id)
    {
        Remark::create([
            'remark'=>$remarkRequest->get('remark'),
            'article_id'=>$id
        ]);

        return redirect()->route('viewArticle',$id);
    }
}
