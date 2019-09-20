<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Compound;

class SearchController extends Controller
{
    public function search(Request $request){
        $q = $request->q;

        if ($q == '') {
            return view('search')->with('message', 'Type something!');
        } else {
            $details = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
            $message = NULL;
//        return \Response::JSON($user);
            if(count($details) > 0){
                return view('search', compact('details', 'message'));
            }else{
                return view('search')->with('message', 'No Details found. Try to search again !');
            }
        }


    }
}
