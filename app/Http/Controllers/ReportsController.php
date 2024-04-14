<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function addReports(Request $request)
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

                Alert::success('Berhasil', 'Laporan berhasil dibuat!');
                return redirect()->back();
            }
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
