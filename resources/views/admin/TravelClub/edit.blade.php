@extends('admin.layouts.master')

@section('title')
Admin
@endsection

@section('custom-css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('page-name')
Cost
@endsection

@section('content')

<div class="row">
    <div class="col-md-"></div>
     <div class="col-md-12">
        <div class="card">
            <div class="card-body">
     
        <div class="row">
                       
            <form class="form-horizontal" action="{{route('travel.update')}}" method="POST" enctype="multipart/form-data" name="updateTravel">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <input type="hidden" id="allclub_id" name="allclub_id" value="{{ old('allclub_id') }}">      


        
                    <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label" style="color: blue">Name </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-danger" placeholder=" Name here " name="name" value="" id="edit_name">
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label" style="color: blue"> Contact</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-danger" placeholder="Contact " name="number" value="" id="edit_number">
                        </div>
                    </div>
                    <div class="form-group row {{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-danger" placeholder="Email " name="email" value="" id="edit_email">
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Passport</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Passport No" name="passport_no" value="" id="edit_passport">
                        </div>
                 
                    </div>
                     <div class="form-group row {{ $errors->has('passport_exp') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Passport Expiry</label>
                        <div class="col-sm-4">
                            <input type="Date" class="form-control form-control-danger" placeholder="Passport " name="passport_exp" value="" id="edit_passportexp">
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Birth Date</label>
                        <div class="col-sm-4">
                           <input type="Date" class="form-control form-control-danger" name="birth" value="" id="edit_birth">
                        </div>
                    </div>
                    <div class="form-group row {{ $errors->has('type') ? ' has-danger' : '' }}">
                    <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Club Name/Others</label>
                        <div class="col-sm-4">
                              <select id="type" name="type"  class="form-control" required="required">
                                <option value="">--Select Club--</option>
                                <option value="travel">Travel Club</option>
                                <option value="uttara">Uttara Club</option>
                                <option value="rotary">Rotary Club</option>
                                <option value="gulshan">Gulshan Club</option>
                                <option value="cadet">Cadet Collage</option>
                                <option value="innerwheel">InnerWheel</option>
                                <option value="jonta">Jonta</option>
                                <option value="others">Others</option>   
                            </select>
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Corporate</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Company Name" name="company" value="" id="edit_corporate">
                        </div>
                 
                    </div>
                <div class="form-group row {{ $errors->has('issu_name') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Reference Name</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Reference Name" name="issu_name" value="" id="edit_issuName">
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Travel Country</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Travel Country" name="lastTravel_country" value="" id="edit_travelcountry">
                        </div>
                 
                    </div>
                     <div class="form-group row {{ $errors->has('note') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Service & Nature</label>
                        <div class="col-sm-10">
                            <textarea type="textarea" name="note" class="form-control" placeholder="Note Here" rows="3" id="edit_note"></textarea>
                        </div>
                    </div>
                      
                    <div class="col-md-12 m-b-20 text-right">    
                        <button type="submit" class="btn btn-info waves-effect">Update Data</button> 
                    </div>
        
            </div>
        </form>

               
                
                
                    
            
                </div>
    
     

            </div>
        </div>
    
</div>


@endsection

@section('custom-js')

@endsection