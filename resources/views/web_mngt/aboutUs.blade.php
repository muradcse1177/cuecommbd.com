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
                            <div id="success" class="alert bg-green alert-dismissible" role="alert" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

                            </div>
                            <div id="danger" class="alert bg-pink alert-dismissible" role="alert" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                            </div>
                            <form id="companyInfo" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Heading:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="heading" name="heading" class="form-control" placeholder="Heading of About us">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">About Our Company:- </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  id="about"  name="about" class="form-control" placeholder="About Our Company">
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
                                        About of our Company.
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
                url: '/api/showAboutUs',
                type: 'POST',
                success: function (response) {
                    data = response.data;
                    console.log(data);

                    var tbody= "<thead> " +
                        "<tr> " +
                        "<th>SL. No</th>" +
                        " <th>Action</th>" +
                        " <th>Heading</th>" +
                        " <th>About</th>" +
                        " </tr>" +
                        " </thead>"+
                        "<tbody>"+
                        "</tbody>";
                    for(var i=0; i<data.length; i++)
                    {
                        tbody += "<tr>";
                        tbody += "<td>"+ (i+1) +"</td>";
                        tbody += "<td>" +'<button type="button"  class="btn btn-primary btn-block waves-effect" onclick="editAbout(this.id) " id='+ i +' data-toggle=\'tooltip\'   data-placement=\'right\' title="Edit" data-original-title="Tooltip on right"> <i class="material-icons">mode_edit</i> <span class="icon-name"></span> </button> ' +
                        "</td>";
                        tbody += "<td>"+data[i]['heading']+"</td>";
                        tbody += "<td>"+data[i]['about']+"</td>";
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
                    heading: "required",
                    about: "required",
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: '/api/insertAboutUs',
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
        function editAbout(i){
            $("#dbid").val(data[i]['id']);
            $("#heading").val(data[i]['heading']);
            $("#about").val(data[i]['about']);
            $("#submit").val('update');
        }
    </script>
@endsection
