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
                                Contents Management
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
                                        <label for="email_address_2">News Type:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select id="type" name="type" class="form-control show-tick" required>
                                                    <option value="">-- Please select --</option>
                                                    <option value="Gallery">Gallery</option>
                                                    <option value="Blog">Blog</option>
                                                    <option value="Testimonial">Testimonial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Name:- </label>
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
                                        <label for="email_address_2">Image Description:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="description" name="description" class="form-control" placeholder="Image Description" required>
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
                                        Website Content Information are shown in table view.
                                    </h2></center>
                            </div><br>
                            <form id="showContentInfo" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">News Type:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select id="type1" name="type" class="form-control show-tick" required>
                                                    <option value="">-- Please select --</option>
                                                    <option value="Gallery">Gallery</option>
                                                    <option value="Blog">Blog</option>
                                                    <option value="Testimonial">Testimonial</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" id="submit" value="search" name="submit" class="btn btn-primary m-t-15 waves-effect">Search Content</button>
                                    </div>
                                </div>
                            </form>
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
        $(document).ready(function(){

            $("#companyInfo").validate({
                rules: {
                    name: "required",
                    file: {
                        required: true,
                        extension: "jpg|jpeg|png"
                    },
                    type: "required",
                    description: "required",
                },
                messages: {
                    file: {
                        file: "logo .jpg, .jpeg, .png only.",
                        extension: "Please upload valid file formats .jpg, .jpeg, .png only."
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/insertContentInfo',
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
                            }
                            if (typeof response.errorMsg !== 'undefined')
                            {
                                $("#danger").show();
                                $("#success").hide();
                                document.getElementById("danger").innerHTML = response.errorMsg;
                            }

                        }
                    });
                    return false;
                }
            });
            $("#showContentInfo").validate({
                rules: {
                    type: "required",
                },

                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/showContentInfo',
                        type: 'POST',
                        data: new FormData($("#showContentInfo")[0]),
                        dataType:'json',
                        async:false,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            data = response.data;
                            console.log(data);
                            if (!$.trim(data)) {
                                $('#table').html("No data found.Please try again.");
                            }
                            else {
                                var tbody = "<thead> " +
                                    "<tr> " +
                                    "<th>SL. No</th>" +
                                    " <th>Action</th>" +
                                    " <th>News type</th>" +
                                    " <th>Name</th>" +
                                    " <th>Image</th>" +
                                    " <th>Status</th>" +
                                    " <th>Description</th>" +
                                    " <th>Upload By</th>" +
                                    " </tr>" +
                                    " </thead>" +
                                    "<tbody>" +
                                    "</tbody>";
                                for (var i = 0; i < data.length; i++) {
                                    tbody += "<tr>";
                                    tbody += "<td>" + (i + 1) + "</td>";
                                    tbody += "<td>" + '<button type="button"  class="btn btn-primary btn-block waves-effect" onclick="editContentInfo(this.id) " id=' + i + ' data-toggle=\'tooltip\'   data-placement=\'right\' title="Edit" data-original-title="Tooltip on right"> <i class="material-icons">mode_edit</i> <span class="icon-name"></span> </button> ' +
                                        "</td>";
                                    tbody += "<td>" + data[i]['type'] + "</td>";
                                    tbody += "<td>" + data[i]['name'] + "</td>";
                                    tbody += '<td><img height=\"40px\" width=\"60px\" src=\"' + data[i]['file'] + '\"></td>';
                                    tbody += "<td>" + data[i]['status'] + "</td>";
                                    tbody += "<td>" + data[i]['description'] + "</td>";
                                    tbody += "<td>" + data[i]['uploadBy'] + "</td>";
                                    tbody += "</tr>";
                                }
                                $('#table').html(tbody);
                            }
                        }
                    });
                    return false;
                }
            });

        });
        function editContentInfo(i){
            $("#dbid").val(data[i]['id']);
            $("#name").val(data[i]['name']);
            $("#type").val(data[i]['type']);
            $("#description").val(data[i]['description']);
            $("#submit").val('update');
        }
    </script>
@endsection
