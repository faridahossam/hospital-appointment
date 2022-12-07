<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Speciality;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $speciality = Speciality::all();
        $users = User::all();
        return view('frontend.home',compact('speciality','users'));
    }

    public function adminRedirect()
    {
        return view('admin.dashboard');
    }

    public function addAppointment(Request $request){

        $data = new appointment; 
        $data->userId=Auth::id();
        $data->speciality=$request->speciality;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->status='In Progress';
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successful');
    }

    public function showAppointments(Request $request)
    {    
        $search=isset($request['search'])?$request['search']:"";
        $searchDate=isset($request['searchDate'])?$request['searchDate']:\Carbon\Carbon::now();
        $newDate = $searchDate?\Carbon\Carbon::parse($searchDate)->format('Y-m-d'):"";
        if($search && !$newDate){
            $data = Appointment::join('specialities', 'appointments.speciality', '=', 'specialities.id')
            ->Where('name', 'LIKE', "%$search%")
            ->get();
        }
        elseif(!$search && $newDate){
            $data = Appointment::join('specialities', 'appointments.speciality', '=', 'specialities.id')
            ->Where('date', 'LIKE', "%$newDate%")
            ->get();
        }
        else{
            $data = Appointment::join('specialities', 'appointments.speciality', '=', 'specialities.id')
            ->Where('name', 'LIKE', "%$search%")
            ->orWhere('date', 'LIKE', "%$newDate%")
            ->get();
        }  
        $user = User::all();
        return view('admin.showAppointments',compact('data','user','search','searchDate','newDate'));
    }

}

