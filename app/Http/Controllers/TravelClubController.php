<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AllClub;


class TravelClubController extends Controller
{
    
    public function index()
    {
    	$allClubs = AllClub::all();
    	return view('admin.TravelClub.index')->with(compact('allClubs'));
    }
    public function store(Request $request)
    {

        if($request->ajax())
            {

                $club = AllClub::create([
                  
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'number'=>$request->number,
                    'address'=>$request->address,
                    'company'=>$request->company,
                    'passport_no'=>$request->passport_no,
                    'passport_exp'=>$request->passport_exp,
                    'birth'=>$request->birth,
                    'type'=>$request->type,
                    'lastTravel_country'=>$request->lastTravel_country,
                    'lastTravel_date'=>$request->lastTravel_date,
                    'issu_name'=>$request->issu_name,
                    'note'=>$request->note,
                    'image'=>$request->image,
                
                ]);
                return response()->json([
                    'club'=>$club,
                    
                ]);
            }
        return redirect(route('travel.index')) -> with( 'message', 'Added Successfully');
    }
    public function show($id)
    {
    	$allClubs = AllClub::find($id);
    	return view('admin.TravelClub.show')->with(compact('allClubs'));

    }
    public function edit(AllClub $allclub, Request $request)
    {   
        $allclub = AllClub::find($request->allclub_id);
        if($request->ajax())
            {
                return response()->json([
                   'allclub'=>$allclub,
              
                ]);
            }
        return view('admin.TravelClub.edit')->with(compact('allclub'));
    }
    public function update(Request $request, $id)
    {

        $allclub = AllClub::find($id);
        if($request->ajax())
            {
                $allclub->update([
                  
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'number'=>$request->number,
                    'company'=>$request->company,
                    'passport_no'=>$request->passport_no,
                    'passport_exp'=>$request->passport_exp,
                    'birth'=>$request->birth,
                    'type'=>$request->type,
                    'lastTravel_country'=>$request->lastTravel_country,
                    'issu_name'=>$request->issu_name,
                    'note'=>$request->note,

                ]);
                return response()->json([
                    'allclub'=>$allclub,
                    
                ]);
            }

        return redirect(route('travel.index')) -> with( 'message', 'Update Successfully');
    }


}
