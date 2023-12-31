<?php

namespace App\Http\Controllers;

use App\Models\UserAction;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserActionsRequest;
use App\Http\Requests\UpdateUserActionsRequest;

class UserActionsController extends Controller
{

    /**
     * Display a listing of UserAction.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_actions = UserAction::all();

        return view('user_actions.index', compact('user_actions'));
    }
}
