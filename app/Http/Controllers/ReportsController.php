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
        // $userId = request()->attributes->get('user_id');

        $reports = Reports::all()->sortByDesc("report_id");
        $reports = Reports::with('user')->get();
        return view('mobile-reports', ["reports" => $reports]);
    }
    public function addReport(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $report = $request->attributes->get('report');
            
            if(strlen($report)>500){
                return redirect()->back()->withErrors(['report' => "Maksimal 500 kata!"]);
            }
            Reports::create([
                "user_id" => $userId,
                "report" => $request->get("report")
            ]);

            return redirect(route("user.reports"));
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function changeReports(Request $request)
    {
        try {
            $credential = $request->only('report_id', 'user_id', 'report');

            // $countPsycholog = Psychologs::where("email", $credential['email'])->count();

            if ('parameter') {
                Alert::error('Gagal', 'Maksimal 500 kata!');
                return redirect()->back();
            } else {
                // Membuat lapaoran
                Reports::create([
                ]);

                Alert::success('Berhasil', 'Laporan berhasil diubah!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }
    public function deleteReports(Request $request)
    {
        try {
            $credential = $request->only('report_id', 'user_id', 'report');

            // $countPsycholog = Psychologs::where("email", $credential['email'])->count();

            if ('parameter') {
                Alert::error('Gagal', 'Maksimal 500 kata!');
                return redirect()->back();
            } else {
                // Membuat lapaoran
                Reports::create([
                ]);

                Alert::success('Berhasil', 'Laporan berhasil dihapus!');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }
}
