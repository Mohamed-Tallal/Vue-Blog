<?php

namespace App\Http\Controllers\FrontEnd;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Traits\ShowDatalTrait;
use App\Repository\PostRepository;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostShowResource;
use App\Interfaces\PostRepositoryInterface;
use App\Traits\ImageTrait;

class PostController extends Controller
{
    use ShowDatalTrait ;
    use ImageTrait ;
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

        $count = $this->post->count_posts();
        $post = $this->post->get_post_data($request->item) ;
        $data = PostResource::collection($post) ;
         return $this->SuccessWithData('Paginate 5 Posts data ',$data,$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->SaveImage('dashboard_files',$request->image);
        return 'ok' ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->post->find_post_data($id);
        $data = new PostShowResource($post);
        return $this->SuccessWithData('Paginate 5 Posts data ',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->post->find_post_data($id);
        $data = new PostShowResource($post);
        return $this->SuccessWithData('Paginate 5 Posts data ',$data);

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
