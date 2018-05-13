<?php

namespace inha_store\Http\Controllers;

use Illuminate\Http\Request;
use File;
use inha_store\ContactMess;
use Response;

class JSONCreator extends Controller
{
    public function store(Request $request)
    {
        $mess = new ContactMess();

        $mess->name = $request['name'];
        $mess->email = $request['email'];
        $mess->title = $request['title'];
        $mess->text = $request['text'];
        $mess->save();
        return redirect('/');
    }

    public function sendJSONFile(Request $request)
    {
        $input = $request->all();
        $contents = array('msg' => 'Thank for you letter!');
        $encodedContent = json_encode($contents);
        File::put('file.json', $encodedContent);
        $this->store($request);
        return response()->download('file.json');
    }
}
