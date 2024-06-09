<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportsController extends Controller
{
    public function index(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $reports = Reports::orderBy('report_id', 'desc')->get();
            $myReports = Reports::where('user_id', $userId)->orderBy('report_id', 'desc')->get();
            return view('mobile.report', compact('reports', 'myReports'));
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
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
            $reportId = $request->report_id;
            $myReports = Reports::where('report_id', $reportId)->first();
            if ($myReports) {
                $myReports->delete();
                Alert::success('Berhasil', 'Report berhasil dihapus!');
                return redirect()->back();
            } else {
                Alert::error('Gagal', 'Report gagal dihapus!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }
}
