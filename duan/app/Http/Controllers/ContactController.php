<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function lienhe(){
        return view('/lienhe');
    }
    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'chude' => 'required',
            'message' => 'required'
        ]);
        if($this->isOnline()){
           $mail_data = [
            'recipient'=>'fightingtogether06@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->name,
            'chude' => $request->chude,
            'body' => $request->message,
           ];
           \Mail::send('mauthu',$mail_data,function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['chude']);
           });
           return redirect()->back()->with('success','Gui mail thanh cong');
        }else{
            return redirect()->back()->withInput()->with('error','Vui long kiem tra Internet');

        }
    }
    public function isOnline($site = "https://www.youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }
}
