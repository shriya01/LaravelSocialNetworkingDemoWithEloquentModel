<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friendship;
use App\User;
class UserController extends Controller
{
    /**
     * [getFriendList description]
     * @return [type] [description]
     */
    public function getFriendList()
    {
        $friendship = Friendship::all()->where('status', 1)->toArray();
        foreach ($friendship as $friendship) {
            $recipient_id = $friendship['recipient_id'];
            $data['user_info'] = User::find($recipient_id)->toArray();
        }
        return view('users.friendslist',$data);
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
