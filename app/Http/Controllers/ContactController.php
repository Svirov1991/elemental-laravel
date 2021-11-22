<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function form(ContactRequest $req){
//        $formdata = $req->input('name');
//        $validation = $req->validate([
//            'name' => 'required|min:2|max:20',
//            'email' => 'required|min:7|max:30'
//        ]);
        $obj = new Contact();
        $obj->name = $req->input('name');
        $obj->email = $req->input('email');
        $obj->message = $req->input('message');
        $obj->save();
        return redirect()->route('home')->with('success', 'Сообщение отправлено');
    }
    public function alertmessages(){
        //$obj = Contact::all();
        $obj = new Contact;
        $data = $obj->all();
        //$data = $obj->inRandomOrder()->first();
        //$data = $obj->inRandomOrder()->get();
        //$data = $obj->orderBy('id', 'desc')->skip(1)->take(1)->get();
        //$data = $obj->where('name', '<>', 'test')->get();
        return view('alertmessages', ['data' => $data]);
    }
    public function onemessage($id){
        $obj = new Contact;
        $data = $obj->find($id);
        return view('onemessage', ['data' => $data]);
    }
    public function update($id){
        $obj = new Contact;
        $data = $obj->find($id);
        return view('updmessage', ['data' => $data]);
    }
    public function updateSubmit($id, ContactRequest $req){
        $obj = Contact::find($id);
        $obj->name = $req->input('name');
        $obj->email = $req->input('email');
        $obj->message = $req->input('message');
        $obj->save();
        return redirect()->route('alertonemessages', $id)->with('success', 'Update');
    }
    public function delete($id){
    $obj = Contact::find($id)->delete();
    return redirect()->route('alertmessages')->with('success', 'Message deleted');
}
}
