@extends('admin.layouts.master')

@section('title')
Admin
@endsection

@section('custom-css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('page-name')
allclub
@endsection

@section('content')

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center;">Discovery Data Engine</h4>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addNewData" aria-hidden="true" style="float: right;">Add New</button>
                <br>
 
                <div class="table-responsive">
                   <table id="TravelTable" class="table table-bordered table-striped"  name="TravelTable">
                        <thead>
                            <tr>
                             
                                <th>Members Name</th>
                                <th>Email </th>
                                <th>Contact Number</th>
                                <th>Passport Number </th>
                                <th>Date Of Birth </th>
                                <th>Clube Name</th>
                           

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                               @foreach( $allClubs as $club)                    
                            <tr>
                                <td>{{$club->name}}</td>
                                <td>{{$club->email}}</td>
                                <td>{{$club->number}}</td>
                                <td>{{$club->passport_no}}</td>
                                <td>{{$club->birth}}</td>
                                <td>{{$club->type}}</td>
                           


                                <td class="text-nowrap">
                                    <a href="{{route('travel.show',$club)}}" data-toggle="tooltip" data-original-title="Show" data-id=""> <i class="fa fa-eye text-success m-r-10"></i> </a>
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit" data-id="{{$club->id}}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="addNewData" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data" name="newClub">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Add New Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label" style="color: blue">   <span class="star" style="color: red">*</span>Name </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-danger" placeholder=" Name here " name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            @foreach($errors->get('name') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label" style="color: blue"> Contact</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-danger" placeholder="Contact " name="number" value="{{ old('number') }}">
                            @if ($errors->has('number'))
                            @foreach($errors->get('number') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-group row {{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-danger" placeholder="Email " name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            @foreach($errors->get('email') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Passport</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Passport No" name="passport_no" value="{{ old('passport_no') }}">
                          
                            @if ($errors->has('passport_no'))
                            @foreach($errors->get('passport_no') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                 
                    </div>
                    <div class="form-group row {{ $errors->has('passport_exp') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Passport Expiry</label>
                        <div class="col-sm-4">
                            <input type="Date" class="form-control form-control-danger" placeholder="Passport " name="passport_exp" value="{{ old('passport_exp') }}">
                            @if ($errors->has('passport_exp'))
                            @foreach($errors->get('passport_exp') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Birth Date</label>
                        <div class="col-sm-4">
                           <input type="Date" class="form-control form-control-danger" name="birth" value="{{ old('birth') }}">
                          
                            @if ($errors->has('birth'))
                            @foreach($errors->get('birth') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                 
                    </div>
                    <div class="form-group row {{ $errors->has('type') ? ' has-danger' : '' }}">
                    <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue"><span class="star" style="color: red">*</span>Club Name/Others</label>
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
                            @if ($errors->has('type'))
                            @foreach($errors->get('type') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Corporate</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Company Name" name="company" value="{{ old('company') }}">
                          
                            @if ($errors->has('company'))
                            @foreach($errors->get('company') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                 
                    </div>
                    <div class="form-group row {{ $errors->has('issu_name') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Reference Name</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Reference Name" name="issu_name" value="{{ old('issu_name') }}">
                          
                            @if ($errors->has('issu_name'))
                            @foreach($errors->get('issu_name') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Travel Country</label>
                        <div class="col-sm-4">
                           <input type="text" class="form-control form-control-danger" placeholder="Travel Country" name="lastTravel_country" value="{{ old('lastTravel_country') }}">
                          
                            @if ($errors->has('lastTravel_country'))
                            @foreach($errors->get('lastTravel_country') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                 
                    </div>

                    <div class="form-group row {{ $errors->has('note') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label"style="color: blue">Service & Nature</label>
                        <div class="col-sm-10">
                            <textarea type="textarea" name="note" class="form-control" placeholder="Note Here" rows="3"></textarea>
                          
                            @if ($errors->has('note'))
                            @foreach($errors->get('note') as $error)
                            <div class="form-control-feedback">{{ $error }}</div>
                            @endforeach
                            @endif
                        </div>
                    </div>


   
                    <div class="col-md-12 m-b-20 text-right">    
                        <button type="submit" class="btn btn-info waves-effect">Save Data</button> 
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.modal-dialog -->
</div>
<div id="editTravel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data" name="updateTravel">
            
            {{ csrf_field() }}
                       
            <input type="hidden" id="allclub_id" name="allclub_id" value="{{ old('allclub_id') }}">      

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Edit All Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label" style="color: blue">Name </label>
                        <div class="col-sm-4">
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
            </div>
        </form>
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection

@section('custom-js')

     <!-- This is data table -->
    <script src="{{ asset('/adminelite/assets/node_modules/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            var updateThis ;

            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });

            var table = $('#TravelTable').DataTable( {
                "order": [[ 0, "dsc" ]]
            } );

            //ajax
            //ajax insert code
            $( "form[name='newClub']" ).on( "submit", function( event ) {
                $('.has-danger').removeClass('has-danger');
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{route('travel.store')}}",
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        var club = response.club;
                        $('#addNewData').modal('hide');

                      
                        var rowNode = table.row.add([ 
                            club.name,
                            club.email,
                            club.number,
                            club.passport_no,
                            club.passport_exp,
                            club.birth,
                            club.type,
                   
                          
                            `<a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Show" data-id="`+club.id+`"> <i class="fa fa-eye text-success m-r-10"></i> </a>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit" data-id="`+club.id+`"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" data-id="`+club.id+`"  data-token="{{ csrf_token() }}"> <i class="fa fa-trash text-danger"></i> </a>
                            `] ).draw().node();

                        swal({
                            title: "<small class='text-success'>Success!</small>", 
                            type: "success",
                            text: "Data Save successfully added!",
                            timer: 2000,
                            html: true,
                        });
                    },
                    error: function(response) {
                        data = JSON.parse(response.responseText);
                        error = "<div class='container'><ol class='text-center' style='padding:2rem;'>";
                        i=1;
                        if(data.errors.name) {
                            $( "input[name='name']").parent().parent().addClass('has-danger');
                            error = error+ "<li>" + data.errors.name +"</li>";
                        }
                        if(data.errors.position){
                            $( "input[name='position']").parent().parent().addClass('has-danger');
                            error = error+ "<li>" + data.errors.position +"</li>";
                        }
                        error = error + "</ol></div>";
                        swal({
                            title: "<small class='text-danger'>Error!</small>", 
                            type: "error",
                            text: error,
                            timer: 5000,
                            html: true,
                        });
                    }
                });
            });

            //ajax edit code
            $('#TravelTable tbody').on( 'click', 'i.fa-pencil', function () { 
                $('.has-danger').removeClass('has-danger');
                updateThis = this;
                allclub_id = $(this).parent().data('id');
                $.ajax({
                    type: "GET",
                    url: "{{route('travel.edit')}}" ,
                    data: "allclub_id=" + allclub_id,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(response) {                        
                        allclub = response.allclub;
                        editFunction(allclub);
                    },
                    error: function(response) {
                        error = "Something wrong.";
                        swal({
                            title: "<small class='text-danger'>Error!</small>", 
                            type: "error",
                            text: error,
                            timer: 1000,
                            html: true,
                        });
                    }
                });              
            });
            
            //seperate the edit function to understand
            function editFunction(allclub){           
                $('#edit_name').val(allclub.name);  
                $('#edit_number').val(allclub.number);
                $('#edit_email').val(allclub.email);
                $('#edit_passport').val(allclub.passport_no);
                $('#edit_passportexp').val(allclub.passport_exp);
                $('#edit_birth').val(allclub.birth);
                $('#edit_corporate').val(allclub.company);
                $('#edit_issuName').val(allclub.issu_name);
                $('#edit_travelcountry').val(allclub.lastTravel_country);
                $('#edit_note').val(allclub.note); 
                $('#allclub_id').val(allclub_id); 
                 

                   var club_type = allclub.type.split(/\s*\-\s*/g);
                   var type = club_type[0];
                  $('select[name="type"]').val(type).change();


                $("#editTravel").modal(); 
            }

            //ajax update code
            $( "form[name='updateTravel']" ).on( "submit", function( event ) {
                $('.has-danger').removeClass('has-danger');
                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{route('travel.update')}}",
                    data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        var allclub = response.allclub;
                        $('#editTravel').modal('hide');  
                        //hide the row.                      
                        table
                            .row( $(updateThis).parents('tr'))
                            .remove()
                            .draw();


                        //insert new row.
                        var rowNode = table.row.add([ 
                            allclub.name,
                            allclub.number,
                            allclub.email,
                            allclub.passport_no,
                            allclub.passport_exp,
                            allclub.birth,
                            allclub.type,
                            allclub.company,
                            allclub.issu_name,
                            allclub.lastTravel_country,
                            allclub.note,
                     
                            `<a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Show" data-id="`+allclub.id+`"> <i class="fa fa-eye text-success m-r-10"></i> </a>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit" data-id="`+allclub.id+`"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            `] ).draw().node();
             

                        swal({
                            title: "<small class='text-success'>Success!</small>", 
                            type: "success",
                            text: " updated successfully!",
                            timer: 2000,
                            html: true,
                        });
                    },
                    error: function(response) {
                        data = JSON.parse(response.responseText);
                        error = "<div class='container'><ol class='text-center' style='padding:2rem;'>";
                        i=1;
                        if(data.errors.name) {
                            $( "input[name='name']").parent().parent().addClass('has-danger');
                            error = error+ "<li>" + data.errors.name +"</li>";
                        }
                        if(data.errors.position){
                            $( "input[name='position']").parent().parent().addClass('has-danger');
                            error = error+ "<li>" + data.errors.position +"</li>";
                        }
                        error = error + "</ol></div>";
                        swal({
                            title: "<small class='text-danger'>Error!</small>", 
                            type: "error",
                            text: error,
                            timer: 5000,
                            html: true,
                        });
                    }
                });
            });


        });
    </script>
@endsection