<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        view()->share('posts', Post::all());
        view()->share('users', User::all());
        view()->share('roles', Role::all());
        view()->share('permissions', Permission::all());
        view()->share('categories', Category::all());

        return view('admin.index');
    }

    public function file_manager()
    {
        if (auth()->user()->hasPermissionTo('file manager')) {
            return view('admin.file-manager');
        }
        return abort('403');
    }

    public function subscription()
    {
        $subscribers = Subscription::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.subscription', compact('subscribers'));
    }
}
