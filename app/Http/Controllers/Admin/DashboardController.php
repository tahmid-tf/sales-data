<?php

namespace App\Http\Controllers\Admin;

use App\Earning;
use App\Exports\SalesExport;
use App\Http\Controllers\Controller;
use App\Revenue;
use App\Sales;
use App\Task;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        $tasks = Task::all();
        return view('admin.admin-content.dashboard.index', compact('sales', 'tasks'));
    }

    public function earningApi()
    {
        $earnings = Earning::all();
        return response()->json($earnings);
    }

    public function revenueApi()
    {
        $revenues = Revenue::all();
        return response()->json($revenues);
    }

    public function exportData()
    {
        return Excel::download(new SalesExport(), 'sales.xlsx');
    }


}
