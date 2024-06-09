<?php
namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\PsychologSchedule;

date_default_timezone_set('Asia/Jakarta'); // Set timezone sesuai kebutuhan

use App\Models\Expertise;
use App\Models\Profile;
use App\Models\Psychologs;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PsychologyController extends Controller
{
    public function psychologDetail(string $psycholog_id)
    {
        $psycholog = Psychologs::where('id', $psycholog_id)->first();
        $user = User::where('email', $psycholog->email)->first();
        $expertise = Expertise::where('psycholog_id', $user->id)->get();
        $alumnus = Profile::where(['type' => 'EDUCATION', 'psycholog_id' => $user->id])->get();
        $job = Profile::where(['type' => 'JOB', 'psycholog_id' => $user->id])->get();
        $building = Profile::where(['type' => 'BUILDING', 'psycholog_id' => $user->id])->get();
        $legal = Profile::where(['type' => 'LEGAL', 'psycholog_id' => $user->id])->get();
        $schedules = $this->psychologSchedule($user->id);
        return view('mobile.psycholog-profile', compact('psycholog', 'expertise', 'alumnus', 'job', 'building', 'legal', 'schedules'));
    }

    public function psychologClaim(Request $request)
    {
        try {
            $userId = $request->attributes->get('user_id');
            $reason = trim($request->reason);
            $scheduleId = trim($request->schedule_id);
            $schedule = PsychologSchedule::where('schedule_id', $scheduleId)->first();
            $user = User::where('id', $schedule->psycholog_id)->first();
            $psycholog = Psychologs::where('email', $user->email)->first();

            $location = "Gedung Kemahasiswaan";
            if ($schedule->location !== "Onsite") {
                $location = "https://meet.google.com/";
            }

            Consultant::create([
                "user_id" => $userId,
                "schedule_id" => $scheduleId,
                "complaint" => $reason,
                "diagnose" => null,
                "advice" => null,
                "psycholog_id" => $psycholog->id,
                "url" => $location,
                "date" => $schedule->date,
                "status" => 0
            ]);
            PsychologSchedule::where('schedule_id', $scheduleId)->update(["status" => 1]);

            return redirect(route('user.dashboard'));
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Gagal', 'Terjadi masalah!');
            return redirect()->back();
        }
    }

    public function psychologSchedule(string $psycholog_id)
    {
        $format = 'Y-m-d';
        $hariIndonesia = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        $tanggalHariArray = [];
        $today = date($format);
        $hariIni = $hariIndonesia[date('w', strtotime($today))];
        for ($i = 0; $i <= 6; $i++) {
            $nextDate = date($format, strtotime("+$i days"));
            $dayOfWeek = $hariIndonesia[date('w', strtotime($nextDate))];
            $tanggal = "$dayOfWeek, $nextDate";
            $schedules = PsychologSchedule::where(["date" => $nextDate, "psycholog_id" => $psycholog_id, "status" => false])->get();
            $tanggalHariArray[] = compact('schedules', 'tanggal');
        }
        return $tanggalHariArray;
    }
}