<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image:
                    linear-gradient(
                            to right,
                            red,
                            #f06d06,
                            rgb(255, 255, 0),
                            green
                    );
        }
    </style>
</head>
<body style="background-color: black;">

<div class="container">
    <center><h3>Dear applicant please send your CV to us.We will call you if we need you.</h3></center><br>
    <form id="formCv" class="form-horizontal" enctype="multipart/form-data">
        <div id="msgDiv" class="form-group" style="display:none">
            <label class="control-label col-sm-2" for="email"></label>
            <div class="col-sm-10">
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong id="msg"></strong>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">College/University:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="college" placeholder="Enter College/University" name="college" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Mobile No:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Photo(jpg,jpeg,png):</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="photo" placeholder="Enter Photo" name="photo" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">CV(pdf,doc,docx):</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="cv" placeholder="Enter CV" name="cv" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="submit"  value="insert" class="btn btn-default">Submit CV</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $("#formCv").validate({
        rules: {
            name: "required",
            college: "required",
            address: "required",
            email: {
                email: true,
                required: true
            },
            mobile: {
                number: true,
                required: true
            },
            cv:   {
                required: true,
                extension: "doc|pdf|docx"
            },
            photo:   {
                required: true,
                extension: "png|jpg|jpeg"
            },
        },
        messages: {
            cv: {
                file: "file .doc, .pdf, .docx only.",
                extension: "Please upload valid file formats .doc, .pdf, .docx  only."
            },
            photo: {
                file: "file .png, .jpg, .jpeg only.",
                extension: "Please upload valid file formats .png, .jpg, .jpeg  only."
            }
        },
        submitHandler: function(form) {
            $.ajax({
                url: '/api/cvUpload',
                type: 'POST',
                data: new FormData($("#formCv")[0]),
                dataType:'json',
                async:false,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (typeof response.successMsg !== 'undefined')
                    {
                        document.getElementById("msg").innerHTML = response.successMsg;
                        $("#msgDiv").css("display", "block");
                    }
                    if (typeof response.errorMsg !== 'undefined')
                    {
                        document.getElementById("msg").innerHTML = response.errorMsg;
                        $("#msgDiv").css("display", "block");
                    }
                }
            });
            return false;
        }
    });
</script>