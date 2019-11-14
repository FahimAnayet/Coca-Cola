<?php

namespace Infinitexyz123\Cocacola\Http\Controllers;

use Infinitexyz123\Cocacola\Models\Coke;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CocacolaController extends Controller
{
    public function index()
    {
    	return view('cocacola::index');
    }

    public function akheriPasta(Request $r)
    {
    	$got = Coke::create([
    		'name' => $r->name,
    		'amount' => 12
    	]);
         $siteOwner = config('coke.site_owner');
    	return view('cocacola::won',compact('got','siteOwner'));
    }
}
