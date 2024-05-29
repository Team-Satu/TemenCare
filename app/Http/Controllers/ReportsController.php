<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use App\Models\Accounts;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ReportsController extends Controller
{

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

            error_log($report);
            error_log(strlen($report));
            error_log($userId);

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
    public function changeReports($report_id)
    {
        $report = Report::findOrFail($report_id);
        return view('reports.edit', compact('report'));
    }

    public function updateReports(Request $request, $report_id)
    {
        $report = Report::findOrFail($report_id);
        $report->report = $request->input('report');
        $report->save();
        return redirect()->route('reports.index')->with('success', 'Report updated successfully');
    }
   public function deleteReports(Request $request)
   {
       try {
           $reportId = $request->route('report_id');

           error_log($reportId);

           if (is_null($reportId)) {
               error_log('Report ID is required');
               return redirect()->back()->with('error', 'Report ID is required');
           }
           $reports = Reports::find($reportId);
           if (is_null($reports)) {
               error_log('Report not found');
               return redirect()->back()->with('error', 'Report not found');
           }
           $reports->delete();
           return redirect()->route('user.reports');

       } catch (\Throwable $th) {
           error_log($th);
           Alert::error('Gagal', 'Terjadi masalah!');
           return redirect()->back();
       }
   }
}
