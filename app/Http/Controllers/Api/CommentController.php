<?php



namespace App\Http\Controllers\Api;
use App\Http\Resources\CommentsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;
use App\comment;
use Carbon\Carbon;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $comments = \App\comment::with(["author"])->paginate(env('COMMENTS_PER_PAGE'));
       return new CommentsResource($comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'content' => 'required',
            'post_id' => 'required'
        ]);
        
        $comment =new comment();
        $comment->content = $request->get('content');
        $comment->date_Written =  Carbon::now()->format('Y-m-d H:i:s');
        $comment->post_id = $id;
        $comment->user_id = $request->user()->id;
        $comment->save();

        return new CommentResource($comment);

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
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
