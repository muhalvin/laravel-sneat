<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        $admin =  User::role('Administrator')->paginate(10, ['*'], 'admin_page');
        $member = User::role('Member')->withTrashed()->paginate(10, ['*'], 'member_page');

        return view('backend.user.main', compact('admin', 'member'));
    }
}
