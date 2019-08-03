<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	if ( $request->role == 'seller') {

    		# proceed this way

    	} elseif ($request->role == 'buyer') {

    		# proceed this another
    	} else {

    		# Otherwise do this
    	}
    
    }


}
