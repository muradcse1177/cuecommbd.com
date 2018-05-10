@extends('layout_back.app')
@section('title', 'Website Management')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                About Us Management
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            {{ Form::open(array('url' => '/cvBank','method' => 'post')) }}
                            <form id="companyInfo" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Start Date:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="startdate" name="startdate" class="form-control" placeholder="Enter Start Date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">End Date:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="enddate"  name="enddate" class="form-control" placeholder="Enter End Date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="hidden"  id="dbid"  name="dbid"  class="form-control" placeholder="LinkedIn Link">
                                        <button type="submit" id="submit" value="insert" name="submit" class="btn btn-primary m-t-15 waves-effect">Search CV</button>
                                    </div>
                                </div>
                                {{Form::close()}}<hr>
                                @if(isset($cvlist))
                                    <div id="tableheader"  class="header">
                                        <center><h2>
                                                CV List of your required date.
                                            </h2></center>
                                    </div>
                                    <div class="body table-responsive">
                                        <table id="table" class="table table-bordered">
                                            <tr>
                                                <th>SL No.</th>
                                                <th>Action</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>College</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                            </tr>
                                            @php
                                            $i=1;
                                            @endphp

                                            @foreach($cvlist as $cv)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td> <a href="{{ route('downloadPdf',['download'=> $cv->cv]) }}"> Download CV </a> </td>
                                                    <td>{{$cv->name}}</td>
                                                    <td><img src="{{$cv->photo}}" width="42" height="42"></td>
                                                    <td>{{$cv->college}}</td>
                                                    <td>{{$cv->address}}</td>
                                                    <td>{{$cv->email}}</td>
                                                    <td>{{$cv->mobile}}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')
    @parent
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript">

        $( "#startdate" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd",
        });
        $( function() {
            $( "#enddate" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: "yy-mm-dd",
            });
        } );
    </script>
@endsection