<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportsController extends Controller
{
    public function index(Request $request)
    {
        $userId = $request->attributes->get('user_id');
        $reports = Reports::orderBy('report_id', 'desc')->get();
        $myReports = Reports::where('user_id', $userId)->orderBy('report_id', 'desc')->get();
        return view('mobile.report', compact('reports', 'myReports'));
    }

    public function addReport(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $report = $request->get("report");

            if (strlen($report) > 500) {
                Alert::error('Gagal', 'Maksimal karakter laporan adalah 500!');
                return redirect()->back();
            }
            Reports::create([
                "user_id" => $userId,
                "report" => $report
            ]);
            return redirect(route("user.report"));
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function deleteReports(Request $request)
    {
        try {
            $reportId = $request->get('report_id');
            dd($reportId);
            $reports = Reports::find($reportId);
            if ($reports) {
                $reports->delete();
                return redirect()->route('route.name');
            } else {
                return redirect()->back()->with('error', 'Report not found');
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }
}
