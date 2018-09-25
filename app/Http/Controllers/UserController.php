<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	/**
	 * [getFriendList description]
	 * @return [type] [description]
	 */
    public function getFriendList()
    {
    	return view('users.friendslist');
    }
    /**
     * [showPendingRequests description]
     * @return [type] [description]
     */
    public function showPendingRequests()
    {
    	echo "show pending requests";
    }
    /**
     * [friendSuggestionList description]
     * @return [type] [description]
     */
    public function friendSuggestionList()
    {
    	    	echo "friend suggestion list";

    }
}
