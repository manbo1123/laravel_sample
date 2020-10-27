<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){   // GETメソッドで受け取ったデータは、引数に指定した変数$requestで取得できる
        //$message = 'コントローラーからindexビューに渡せるかの確認';
        if ($request->filled('keyword')) {   // データの有無で条件分岐
            $keyword = $request->input('keyword');
            $message = '検索キーワード: '.$keyword;
            $articles = Article::where('content', 'like', '%'.$keyword.'%')->get();
        }else{   // 検索キーワードが入力されてない場合
            $message = "検索キーワードを入力してください。";
            $articles = Article::all();
        }
        return view('index', ['message' => $message, 'articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message = '投稿フォーム： ';
        return view('new', ['message'=>$message]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->content = $request->content;      // 投稿内容
        $article->user_name = $request->user_name;  // 投稿者名
        $article->save();                           // 保存
        // レコード保存後に、詳細表示ページへデータを渡してリダイレクト
        return redirect()->route('article.show', ['id' => $article->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Article $article)
    {
        $message = '記事の内容： ';
        $article = Article::find($id);
        return view('show', ['message' => $message, 'article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Article $article)
    {
        $message = '記事の編集： '.$id;    // 表示用
        $article = Article::find($id);  // 編集するレコードをid情報から取得
        // 編集ページに、$message と $articleを渡して表示させる
        return view('edit', ['message'=>$message, 'article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Article $article)
    {
        $article = Article::find($id);
        $article->content = $request->content;
        $article->user_name = $request->user_name;
        $article->save();
        return redirect()->route('article.show', ['id' => $article->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Article $article)
    {
        $article = Article::find($id);
        $article -> delete();
        return redirect("/articles");
    }
}
