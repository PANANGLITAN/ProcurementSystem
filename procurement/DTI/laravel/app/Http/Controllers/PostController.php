<?php
namespace App\Http\Controllers;

use App\Post;
use App\Procurement;
use Illuminate\Http\Request;


class PostController extends Controller
{


	public function getDashboard()
	{
		$postinfo = Procurement::all();
		return view('dashboard',['postinfo' =>$postinfo]);	
	}

	public function postCreatePost(Request $request)
	{
		//Validation
		$this->validate($request,[
			'body' => 'required|max:1000'
		]);

		$post = new Post();
		$post->body = $request['body'];
		$message = 'There was an error';
		if($request->user()->posts()->save($post))
		{
			$message = 'Post successfully created';
		}
		return redirect()->route('dashboard')->with(['message' => $message]) ; 
	}

	public function postCreateProcurement(Request $request)
	{
		//Validation
		$procurement = new Procurement();
		$procurement->date = $request['date'];
		$procurement->prno = $request['prno'];
		$procurement->particulars = $request['particulars'];
		$procurement->daterequiredneeded = $request['daterequiredneeded'];
		$procurement->total = $request['total'];
		$procurement->requestingdivision = $request['requestingdivision'];
		$procurement->noticetoproceed = $request['noticetoproceed'];
		$procurement->deliverycompletion = $request['deliverycompletion'];
		$procurement->acceptanceturnover = $request['acceptanceturnover'];
		$procurement->cino = $request['cino'];
		$procurement->accounting = $request['accounting'];
		$procurement->cashier = $request['cashier'];
		$procurement->numberofdayspodelivery = $request['numberofdayspodelivery'];
		$procurement->numberofdaysdeliverycashier = $request['numberofdaysdeliverycashier'];
		$message = 'There was an error';
		if($request->user()->postinfo()->save($procurement))
		{
			$message = 'Post successfully created';
		}
		return redirect()->route('dashboard')->with(['message' => $message]) ; 
	}


	public function getDeletePost($post_id)
	{
		$post = Procurement::where('id',$post_id)->first();
		$post->delete();
		return redirect()->route('dashboard')->with(['message'=>'Successfully deleted'
			]);
	}
}