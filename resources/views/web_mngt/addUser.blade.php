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
                                Company Information
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
                            <div id="success" class="alert bg-green alert-dismissible" role="alert" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

                            </div>
                            <div id="danger" class="alert bg-pink alert-dismissible" role="alert" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <form id="companyInfo" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Name:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="User Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">UserName:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="username"  name="username" class="form-control" placeholder="UserName">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Password:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="password"  name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email Address:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="email"  name="email" class="form-control" placeholder="Enter your email address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" id="submit" value="insert" name="submit" class="btn btn-primary m-t-15 waves-effect">Save Info</button>
                                    </div>
                                </div>
                            </form><hr>
                            <div id="tableheader"  class="header">
                                <center><h2>
                                        School Information are shown in table view.
                                    </h2></center>
                            </div>
                            <div class="body table-responsive">
                                <table id="table" class="table table-bordered">

                                </table>
                            </div>
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <center><h4 class="modal-title">Are you Sure!!</h4></center>
                                        </div>
                                        <form id="delete">
                                            <div class="modal-footer">
                                                <input type="hidden"  id="dbid"  name="dbid"  class="form-control" placeholder="LinkedIn Link">
                                                <button type="submit" name="submit" value="delete" class="btn btn-default">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')
    @parent
    <script src="/back_resource/js/pages/ui/dialogs.js"></script>

    <script src="/back_resource/plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        function loadCompanyInformation() {
            $.ajax({
                url: '/api/showuserInfo',
                type: 'POST',
                success: function (response) {
                    data = response.data;
                    console.log(data);

                    var tbody= "<thead> " +
                        "<tr> " +
                        "<th>SL. No</th>" +
                        " <th>Action</th>" +
                        " <th> Name</th>" +
                        " <th>Username</th>" +
                        " <th>password</th>" +
                        " <th>Email</th>" +
                        " </tr>" +
                        " </thead>"+
                        "<tbody>"+
                        "</tbody>";
                    for(var i=0; i<data.length; i++)
                    {
                        tbody += "<tr>";
                        tbody += "<td>"+ (i+1) +"</td>";
                        tbody += "<td>" +'<button type="button"  class="btn btn-primary btn-block waves-effect" onclick="editDelete(this.id) " id='+ i +' data-toggle=\'tooltip\'   data-placement=\'right\' data-toggle="modal" data-target="#myModal" title="Edit" data-original-title="Tooltip on right"> <i class="material-icons">delete</i> <span class="icon-name"></span> </button> ' +
                            "</td>";
                        tbody += "<td>"+data[i]['name']+"</td>";
                        tbody += "<td>"+data[i]['username']+"</td>";
                        tbody += "<td>"+data[i]['password']+"</td>";
                        tbody += "<td>"+data[i]['email']+"</td>";
                    }
                    $('#table').html(tbody);
                }
            });
        }
        $(document).ready(function(){

            loadCompanyInformation();

            $("#companyInfo").validate({
                rules: {
                    name: "required",
                    username: "required",
                    password: "required",
                    email: {email:  true , required:  true},
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/adduser',
                        type: 'POST',
                        data: new FormData($("#companyInfo")[0]),
                        dataType:'json',
                        async:false,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (typeof response.successMsg !== 'undefined')
                            {
                                $("#success").show();
                                $("#danger").hide();
                                document.getElementById("success").innerHTML = response.successMsg;
                                loadCompanyInformation();
                            }
                            if (typeof response.errorMsg !== 'undefined')
                            {
                                $("#danger").show();
                                $("#success").hide();
                                document.getElementById("danger").innerHTML = response.errorMsg;
                                loadCompanyInformation();
                            }

                        }
                    });
                    return false;
                }
            });
            $("#delete").validate({
                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/adduser',
                        type: 'POST',
                        data: new FormData($("#delete")[0]),
                        dataType:'json',
                        async:false,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (typeof response.successMsg !== 'undefined')
                            {
                                loadCompanyInformation();
                                $('#myModal').modal('hide');

                            }
                            if (typeof response.errorMsg !== 'undefined')
                            {
                                loadCompanyInformation();
                                $('#myModal').modal('hide');
                            }

                        }
                    });
                    return false;
                }
            });

        });
        function editDelete(i){
            console.log(i);
            $("#dbid").val(data[i]['id']);
            $('#myModal').modal('show');
        }
    </script>
@endsection