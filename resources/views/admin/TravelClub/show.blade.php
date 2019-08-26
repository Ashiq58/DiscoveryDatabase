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
                <h4 class="card-title" style="text-align: center;margin-top: 20px">Client Details
                </h4><br>
                          <div class="row">
                       
                             <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="mt-4"> <img src="{{ asset('/').$allClubs->avatar}}" class="rounded-circle" width="150" />
                                            <h4 class="card-title mt-2"></h4>
                                            <h6 class="card-subtitle">{{ $allClubs->name?$allClubs->name: "Not Available" }}</h6>
                                        </center>
                                    </div>
                                    <div>
                                        <hr> </div>
                                    <div class="card-body"> <small class="text-muted">Email address </small>
                                        <h6 style="color: blue !important">{{ $allClubs->email?$allClubs->email:"Not Available" }}</h6><small class="text-muted pt-4 db">Phone</small>
                                        <h6 style="color: blue !important">{{ $allClubs->number?$allClubs->number:"Not Available" }}</h6> <small class="text-muted pt-4 db">Address</small>
                                        <h6 style="color: blue !important">{{ $allClubs->address?$allClubs->address:"Not Available" }}</h6>
                                        <small class="text-muted pt-4 db">Reference Name</small>
                                        <h6 style="color: red !important">{{ $allClubs->issu_name?$allClubs->issu_name:"Not Available" }}</h6>
                                        <!--<small class="text-muted pt-4 db">Social Profile</small>
                                        <br/>
                                        <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                        <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                        <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>-->
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Client Name</strong>
                                                <br>
                                                <p class="text-muted" style="color: red !important">
                                                    {{ $allClubs->name?$allClubs->name: "Not available"}}
                                                </p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Contact Number</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->number?$allClubs->number: "Not Available"}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->email?$allClubs->email: "Not Available"}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Company Name </strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->company?$allClubs->company:"Not Available"}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Passport</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->passport_no?$allClubs->passport_no:"Not Available"}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>PP Expiry Date</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->passport_exp?$allClubs->passport_exp:"Not Available"}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Birth Day</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->birth?$allClubs->birth:"Not Available"}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"><strong>Club Name</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->type?$allClubs->type:"Not Available"}}</p>
                                            </div>

                                        </div>
                                        <hr>
                                        <b class="mt-4"> 
                                                <div class="col-md-6 col-xs-6"><strong>Note</strong>
                                                <br>
                                                <p class="text-muted"style="color: red !important">{{ $allClubs->note?$allClubs->note:"Not Available"}}</p>
                                            </div></b>
                                       
                                    </div>
                                </div>
                            </div>
               
 <!--                               <div class="col-md-3 col-xs-6"> <strong>User Detail unavailable</strong>

                               </div> -->
               
                            </div>
                
                    
            
                </div>
    
     

            </div>
        </div>
    
</div>


@endsection

@section('custom-js')

@endsection