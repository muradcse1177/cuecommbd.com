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
                                Employee  Management
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
                                Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                            </div>
                            <form id="employeeInfo" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Stuff Name:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Designation:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="designation" name="designation" class="form-control" placeholder="Designation" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Stuff Value:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="value" name="value" class="form-control" placeholder="Stuff Value" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Image/Photo:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file"  id="file" name="file" class="form-control" placeholder="Image/photo" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Facebook Link:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="fblink"  name="fblink" class="form-control" placeholder="Facebook Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Twitter Link:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="twitlink"  name="twitlink" class="form-control" placeholder="Twitter Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">LinkedIn Link:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="linkedlink"  name="linkedlink"  class="form-control" placeholder="LinkedIn Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Status:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select id="status" name="status" class="form-control show-tick" required>
                                                    <option value="">-- Please select --</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="hidden"  id="dbid"  name="dbid"  class="form-control" placeholder="LinkedIn Link">
                                        <button type="submit" id="submit" value="insert" name="submit" class="btn btn-primary m-t-15 waves-effect">Save Info</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div id="tableheader"  class="header">
                                <center><h2>
                                        Stuff List of Office are shown in table view.
                                    </h2></center>
                            </div><br>
                            <div class="body table-responsive">
                                <table id="table" class="table table-bordered">

                                </table>
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
    <script>
        function loadCompanyInformation() {
            $.ajax({
                url: '/api/showEmployeeInfo',
                type: 'POST',
                success: function (response) {
                    data = response.data;
                    console.log(data);

                    var tbody= "<thead> " +
                        "<tr> " +
                        "<th>SL. No</th>" +
                        " <th>Action</th>" +
                        " <th>Name</th>" +
                        " <th>Photo</th>" +
                        " <th>Designation</th>" +
                        " <th>Status</th>" +
                        " <th>Facebook</th>" +
                        " <th>Twitter</th>" +
                        " <th>Linked In</th>" +
                        " </tr>" +
                        " </thead>"+
                        "<tbody>"+
                        "</tbody>";
                    for(var i=0; i<data.length; i++)
                    {
                        tbody += "<tr>";
                        tbody += "<td>"+ (i+1) +"</td>";
                        tbody += "<td>" +'<button type="button"  class="btn btn-primary btn-block waves-effect" onclick="editEmployeefo(this.id) " id='+ i +' data-toggle=\'tooltip\'   data-placement=\'right\' title="Edit" data-original-title="Tooltip on right"> <i class="material-icons">mode_edit</i> <span class="icon-name"></span> </button> ' +
                            "</td>";
                        tbody += "<td>"+data[i]['name']+"</td>";
                        tbody += '<td><img height=\"40px\" width=\"60px\" src=\"'+data[i]['file']+'\"></td>';
                        tbody += "<td>"+data[i]['designation']+"</td>";
                        tbody += "<td>"+data[i]['status']+"</td>";
                        tbody += "<td>"+data[i]['fblink']+"</td>";
                        tbody += "<td>"+data[i]['twitlink']+"</td>";
                        tbody += "<td>"+data[i]['linkedlink']+"</td>";
                        tbody += "</tr>";
                    }
                    $('#table').html(tbody);
                }
            });
        }
        $(document).ready(function(){
            loadCompanyInformation();
            $("#employeeInfo").validate({
                rules: {
                    name: "required",
                    file: {
                        required: true,
                        extension: "jpg|jpeg|png"
                    },
                    designation: "required",
                    status: "required",
                },
                messages: {
                    file: {
                        file: "logo .jpg, .jpeg, .png only.",
                        extension: "Please upload valid file formats .jpg, .jpeg, .png only."
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/insertEmployeeInfo',
                        type: 'POST',
                        data: new FormData($("#employeeInfo")[0]),
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
        });
        function editEmployeefo(i){
            $("#dbid").val(data[i]['id']);
            $("#name").val(data[i]['name']);
            $("#designation").val(data[i]['designation']);
            $("#status").val(data[i]['status']);
            $("#fblink").val(data[i]['fblink']);
            $("#twitlink").val(data[i]['twitlink']);
            $("#linkedlink").val(data[i]['linkedlink']);
            $("#submit").val('update');
        }
    </script>
@endsection
