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
                                        <label for="email_address_2">Company Name:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Company Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Company Logo:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file"  id="logo"  name="logo" class="form-control" placeholder="Company Logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">About Company:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="about"  name="about" class="form-control" placeholder="About Company">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact Number:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="contact1" name="contact1" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact Number 2:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="contact2"  name="contact2" class="form-control" placeholder="Contact Number 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Address:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="address"  name="address" class="form-control" placeholder="Address">
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
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Opening Day From:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="opening"  name="opening" class="form-control" placeholder="Opening Day From">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Closing Day To:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="closing"  name="closing" class="form-control" placeholder="Closing Day To">
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
                                        <label for="email_address_2">Youtube Link:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="youlink"  name="youlink" class="form-control" placeholder="Youtube Link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Instragram Link:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="instalink"  name="instalink"  class="form-control" placeholder="Instragram Link">
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
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="hidden"  id="dbid"  name="dbid"  class="form-control" placeholder="LinkedIn Link">
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
                url: '/api/showCompanyInfo',
                type: 'POST',
                success: function (response) {
                    data = response.data;
                    console.log(data);

                    var tbody= "<thead> " +
                        "<tr> " +
                        "<th>SL. No</th>" +
                        " <th>Action</th>" +
                        " <th>Company Name</th>" +
                        " <th>Logo</th>" +
                        " <th>About</th>" +
                        " <th>Contact Number 1</th>" +
                        " <th>Contact Number 2</th>" +
                        " <th>Address</th>" +
                        " <th>Email</th>" +
                        " <th>Opening Day From</th>" +
                        " <th>Closing Day To</th>" +
                        " <th>Facebook Link</th>" +
                        " <th>Twitter Link</th>" +
                        " <th>Youtube Link</th>" +
                        " <th>Instragram Link</th>" +
                        " <th>LinkedIn Link</th>" +
                        " </tr>" +
                        " </thead>"+
                        "<tbody>"+
                        "</tbody>";
                    for(var i=0; i<data.length; i++)
                    {
                        tbody += "<tr>";
                        tbody += "<td>"+ (i+1) +"</td>";
                        tbody += "<td>" +'<button type="button"  class="btn btn-primary btn-block waves-effect" onclick="editCompanyInfo(this.id) " id='+ i +' data-toggle=\'tooltip\'   data-placement=\'right\' title="Edit" data-original-title="Tooltip on right"> <i class="material-icons">mode_edit</i> <span class="icon-name"></span> </button> ' +
                            "</td>";
                        tbody += "<td>"+data[i]['name']+"</td>";
                        tbody += '<td><img height=\"40px\" width=\"60px\" src=\"'+data[i]['logo']+'\"></td>';
                        tbody += "<td>"+data[i]['about']+"</td>";
                        tbody += "<td>"+data[i]['contact1']+"</td>";
                        tbody += "<td>"+data[i]['contact2']+"</td>";
                        tbody += "<td>"+data[i]['address']+"</td>";
                        tbody += "<td>"+data[i]['email']+"</td>";

                        tbody += "<td>"+data[i]['openin']+"</td>";
                        tbody += "<td>"+data[i]['closing']+"</td>";
                        tbody += "<td>"+data[i]['fblink']+"</td>";
                        tbody += "<td>"+data[i]['twitlink']+"</td>";
                        tbody += "<td>"+data[i]['youlink']+"</td>";
                        tbody += "<td>"+data[i]['instalink']+"</td>";
                        tbody += "<td>"+data[i]['linkedlink']+"</td>";
                        tbody += "</tr>";
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
                    logo: {
                        required: true,
                        extension: "jpg|jpeg|png"
                    },
                    about: "required",
                    contact1: {required: true, number: true},
                    contact2: {required: true, number: true},
                    address: "required",
                    email: {email:  true , required:  true},
                },
                messages: {
                    logo: {
                        logo: "logo .jpg, .jpeg, .png only.",
                        extension: "Please upload valid file formats .jpg, .jpeg, .png only."
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/insertCompanyInfo',
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

        });
        function editCompanyInfo(i){
            $("#dbid").val(data[i]['id']);
            $("#name").val(data[i]['name']);
            $("#about").val(data[i]['about']);
            $("#contact1").val(data[i]['contact1']);
            $("#contact2").val(data[i]['contact2']);
            $("#address").val(data[i]['address']);
            $("#email").val(data[i]['email']);
            $("#opening").val(data[i]['opening']);
            $("#closing").val(data[i]['closing']);
            $("#fblink").val(data[i]['fblink']);
            $("#twitlink").val(data[i]['twitlink']);
            $("#youlink").val(data[i]['youlink']);
            $("#instalink").val(data[i]['instalink']);
            $("#linkedlink").val(data[i]['linkedlink']);
            $("#submit").val('update');
        }
    </script>
@endsection