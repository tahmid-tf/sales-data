<?php

namespace App\Http\Controllers\Admin;

use App\Earning;
use App\Http\Controllers\Controller;
use App\Revenue;
use App\Sales;
use App\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $sales = Sales::all();
        $tasks = Task::all();
        return view('admin.admin-panel.main', compact('sales','tasks'));
    }

    public function earningApi(){
        $earnings = Earning::all();
        return response()->json($earnings);
    }

    public function revenueApi(){
        $revenues = Revenue::all();
        return response()->json($revenues);
    }


}
