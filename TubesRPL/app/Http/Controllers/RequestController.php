<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        if (auth()->user()->request->status == "waiting") {
            return view('Requests.form', [
                'title' => 'Mentor | Data Fullfilment'
            ]);
        } elseif (auth()->user()->request->status == "onreview") {
            return view('Requests.onreview', [
                'title' => 'Mentor | On-Review'
            ]);
        }
    }

    public function upload(Request $request)
    {
        $cv = 'cv' . $request->id . '.pdf';
        $request->file('cv')->storeAs('cv', $cv, 'public');
        $pi = 'pi' . $request->id . '.pdf';
        $request->file('pi')->storeAs('pi', $pi, 'public');
        $user = auth()->user();
        $user->request->cv = $cv;
        $user->request->pi = $pi;
        $user->request->status = 'onreview';
        $user->request->save();
        return redirect('/mentor/fullfilment')->with('msg', 'Your data has submitted');
    }

    public function accept($id)

    {
        $request = ModelsRequest::where('id', $id)->first();
        $request->status = "done";
        $request->save();
        return redirect('/admin/requests');
    }
}
