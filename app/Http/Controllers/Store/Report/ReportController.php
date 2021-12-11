<?php

namespace App\Http\Controllers\Store\Report;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends BaseController
{
    public function index(){
       $data = Auth::guard('store')->user()->adReports()->paginate(3);
       return view('store.report.index', compact('data'));
    }

    public function show($id){
        $report = Report::find($id);
        return view('store.report.detail', compact('report'));
    }
    public function search(Request $request)
    {
        if (isset($_GET['query']) && $_GET['query'] != "") {
            $data = Auth::guard('store')->user()->adReports()->where('advertisements.title', 'LIKE', '%'.$_GET['query'].'%')->paginate(3);
            $data->appends($request->all());
            return view('store.report.index', compact('data'));
        } else {
            $data = Report::paginate(3);
            return view('store.report.index', compact('data'));

        }
    }
}
