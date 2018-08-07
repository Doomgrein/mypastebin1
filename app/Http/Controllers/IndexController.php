<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class IndexController extends Controller
{
	protected $header;
	protected $text;

	public function __construct() {
		$this->header = 'MyPasteBin';
    	$this->text = 'Here is my text!';
	}

    public function index() {	
    	$messages = Message::select(['theme','text','id'])->get();
    	return view('index')->with (['header' => $this->header,
    								 'text' => $this->text,
    								 'messages' => $messages
    								]);
    }

    public function show($id){
    	$message = Message::select(['id', 'theme', 'text'])->where('id', $id)->first();
    	return view('message-content')->with (['header' => $this->header,
    											'text' => $this->text,
    											'message' => $message
    											]);
    }

    public function add(){
    	return view('add-message')->with (['header' => $this->header,
    										'text' => $this->text
    										]);
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'theme' => 'required|max:65',
    		'text' => 'required|max:500'
    	]);
    	$data = $request->all();
    	$message = new Message;
    	$message->fill($data);
    	$message->save();
    	return redirect('/');
    }
}
