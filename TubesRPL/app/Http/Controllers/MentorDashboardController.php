<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\review;
use Illuminate\Http\Request;

class MentorDashboardController extends Controller
{
    public function mycourses()
    {
        $user =  auth()->user();
        $playlist = $user->playlist;
        return view('Mentor.mycourse', [
            'title' => 'Sqeel.io | My Courses',
            'playlist' => $playlist,
        ]);
    }

    public function myvideosindex()
    {
        $user =  auth()->user();
        $list = $user->playlist;
        return view('Mentor.video', [
            'title' => 'Sqeel.io | My Videos',
            'list' => $list,
        ]);
    }
    public function myvideos(playlist $playlist)
    {
        $user =  auth()->user();
        $list = $user->playlist;
        return view('Mentor.video', [
            'title' => 'Sqeel.io | My Videos',
            'list' => $list,
            'playlist' => $playlist,
        ]);
    }

    public function myreviewsindex()
    {
        $user =  auth()->user();
        $list = $user->playlist;
        return view('Mentor.review', [
            'title' => 'Sqeel.io | My Reviews',
            'list' => $list,
        ]);
    }

    public function myreviews(playlist $playlist)
    {
        $user =  auth()->user();
        $list = $user->playlist;
        return view('Mentor.review', [
            'title' => 'Sqeel.io | My Reviews',
            'playlist' => $playlist,
            'list' => $list,
        ]);
    }
}
