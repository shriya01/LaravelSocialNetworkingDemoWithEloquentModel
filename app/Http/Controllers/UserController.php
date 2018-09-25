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
        return view('users.pendingrequests');
    }
    /**
     * [friendSuggestionList description]
     * @return [type] [description]
     */
    public function friendSuggestionList()
    {
        return view('users.friendsuggestionlist');

    }
}
