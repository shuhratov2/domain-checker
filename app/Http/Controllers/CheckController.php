<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iodev\Whois\Factory;

class CheckController extends Controller
{
    public function index(Request $request)
    {
        $whois = Factory::get()->createWhois();
        if($whois->isDomainAvailable($request->input('check'))) {
            session()->flash('success','Bingo! Domain is available!');
            return redirect()->back();
        }
        else
        {
            session()->flash('danger','Sorry this domain is not available!');
            return redirect()->back(); 
        }
        
    }
    public function checker()
    {
        return view('check');
    }

}
