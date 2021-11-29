<?php

namespace App\Http\Controllers\FrontEnd;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Traits\ShowDatalTrait;
use App\Repository\PostRepository;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    use ShowDatalTrait ;
    private $post = '' ;
    public function __construct(PostRepository $postRepository)
    {
        $this->post = $postRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //        $test = Post::orderBy('id', 'DESC')->select('image')->paginate(1);
        // return $test;
        $count = $this->post->count_posts();
        $post = $this->post->get_post_data($request->item) ;
        $data = PostResource::collection($post) ;
         return $this->SuccessWithData('Paginate 5 Posts data ',$data,$count);
        //return response()->json($post );

   ;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
