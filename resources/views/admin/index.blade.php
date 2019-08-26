@extends('admin.layouts.master')

@section('title')
Admin
@endsection

@section('custom-css')

@endsection

@section('page-name')
Dashboard
@endsection

@section('content')

<div class="row" style="margin-top: 5px">
    <!-- column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#">Travel Club</a></h5>
                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                    <span class="display-5 text-primary"><i class=" icon-layers"></i></span>
                    <a href="#" class="link display-5 ml-auto">{{$travelClubs->count('travel')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#"> Uttara Club</a></h5>
                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                    <span class="display-5 text-primary"><i class=" icon-layers"></i></span>
                    <a href="#" class="link display-5 ml-auto">{{$uttaraClubs->count('uttara')}}</a>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#">Gulshan Club</a></h5>
                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                    <span class="display-5 text-primary"><i class=" icon-layers"></i></span>
                    <a href="#" class="link display-5 ml-auto">{{$uttaraClubs->count('uttara')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#"> Rotary Club</a></h5>
                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                    <span class="display-5 text-primary"><i class=" icon-layers"></i></span>
                    <a href="#" class="link display-5 ml-auto"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#"> Cadet College</a></h5>
                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                    <span class="display-5 text-primary"><i class=" icon-layers"></i></span>
                    <a href="#" class="link display-5 ml-auto"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><a href="#"> Innerwheel</a></h5>
                <div class="d-flex m-t-30 m-b-20 no-block align-items-center">
                    <span class="display-5 text-primary"><i class=" icon-layers"></i></span>
                    <a href="#" class="link display-5 ml-auto"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Monthly Notification </h4>
                <div class="table-responsive">
                    <table id="accountTable" class="table table-bordered table-striped"  name="accountTable">
                        <thead>
                            <tr>                                
                                
                                <th>Members name</th>
                                <th>Passport Number</th>
                                <th>Passport Expiry Date</th>
                                <th> Birth Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                          <tbody id="tbody">
                                   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-js')

@endsection