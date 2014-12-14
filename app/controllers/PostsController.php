<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Artikel::with('kategoriartikel')
                        ->where('status','=',1)
                        ->orderBy('created_at','desc')
                        ->paginate(10);
        //dd($posts->toArray());
        //dd($posts);
        //dd(DB::getQueryLog());
        return View::make('index', compact('posts'));
	}

    /**
     * Display the specified resource.
     * GET /posts/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function post($id)
    {
        $post = Artikel::with('kategoriartikel')->find($id);

        return View::make('post', compact('post'));
    }

    public function kategori($id)
    {
        $posts = Artikel::where('kategori','=', $id)->where('status','=',1)->paginate(10);
        $kategories = KategoriArtikel::all();
        if($posts->isEmpty()){
            $title = "No Article Found";
        }else {
            foreach ($posts as $post) {
                $title = "Latest Stories From " . $post->kategoriartikel->name;
            }
        }
        //dd($posts->toArray());
        //dd($posts);
        //dd(DB::getQueryLog());
        return View::make('index', compact('posts','kategories','title'));
    }

    public function jetassault()
    {
        $posts = Artikel::where('kategori','=', '2')->where('status','=',1)->take(5)->get();
        //dd($posts);

        return View::make('jetassault', compact('posts'));
    }

    public function jetassaultgatekeeper()
    {
        $posts = Artikel::where('kategori','=', '3')->where('status','=',1)->take(5)->get();
        //dd($posts);

        return View::make('jetassaultgatekeeper', compact('posts'));
    }

    public function myworld()
    {
        $posts = Artikel::where('kategori','=', '4')->where('status','=',1)->take(5)->get();
        //dd($posts);

        return View::make('myworld', compact('posts'));
    }


    public function search(){
        $key = Input::get('q');
        $posts = Artikel::where('judul','LIKE','%' .$key. '%')
                    ->where('status','=',1)
                    ->orderBy('created_at','desc')
                    ->paginate(10);

        return View::make('searchresult', compact('posts','key'));
    }
}