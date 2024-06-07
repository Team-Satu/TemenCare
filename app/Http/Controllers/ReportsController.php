<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\Accounts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportsController extends Controller
{
    public function index()
    {
        return view('mobile.report');
    }

    // Display report
    public function reports()
    {
        $reports = Reports::orderBy('report_id', 'desc')->get();
        return view('mobile-reports', ["reports" => $reports]);
    }

    public function yourReports()
    {
        $reports = Reports::orderBy('report_id', 'desc')->get();
        return view('mobile-your-reports', ["reports" => $reports]);
    }


    public function addReport(Request $request)
    {
        try {
            // User id diambil menggunakan attribute karena dia di set di middleware ke attribute
            $userId = $request->attributes->get('user_id');

            // Report bisa langsung diambil dari $request karena dia merupakan data yang langsung ditembak sebagai post data
            $report = $request->get("report");

            if (strlen($report) > 500) {
                // Pake kode di bawah ini kalo misalkan make show error, jangan pake withError (approach kita beda soalnya).
                Alert::error('Gagal', 'Maksimal karakter laporan adalah 500!');
                return redirect()->back();
            }

            Reports::create([
                "user_id" => $userId,
                "report" => $report
            ]);

            return redirect(route("user.reports"));
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
