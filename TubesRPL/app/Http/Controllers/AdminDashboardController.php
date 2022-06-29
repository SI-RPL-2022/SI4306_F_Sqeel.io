<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $student = count(User::where('role_id', '=', '1')->get());
        $mentor = count(User::where('role_id', '=', '2')->get());
        $course = count(playlist::all());
        $video = count(video::all());
        $data3 = User::select('id', 'created_at')->get()->groupBy(function ($data3) {
            return Carbon::parse($data3->created_at)->format('M');
        });
        $months3 = [];
        $monthcount3 = [];
        foreach ($data3 as $month3 => $values3) {
            $months3[] = $month3;
            $monthcount3[] = count($values3);
        }

        return view('Admin.dashboard', [
            'title' => 'Sqeel.io | Admin Dashboard',
            'student' => $student,
            'mentor' => $mentor,
            'course' => $course,
            'video' => $video,
            'months3' => json_encode($months3),
            'monthcount3' => json_encode($monthcount3)
        ]);
    }
    public function users()
    {
        $user = User::all();
        return view('Admin.users', [
            'title' => 'Sqeel.io | All Users',
            'users' => $user
        ]);
    }
    public function videos()
    {
        $video = video::all();
        return view('Admin.videos', [
            'title' => 'Sqeel.io | All Videos',
            'videos' => $video
        ]);
    }
    public function courses()
    {
        $playlist = playlist::all();
        return view('Admin.courses', [
            'title' => 'Sqeel.io | All Courses',
            'courses' => $playlist
        ]);
    }

    public function requests()
    {
        $request = ModelsRequest::wherein('status', ['onreview', 'waiting'])->get();
        return view('Admin.requests', [
            'title' => 'Sqeel.io | Mentor Request',
            'requests' => $request
        ]);
    }
}
