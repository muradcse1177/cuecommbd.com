
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@if(isset($_SESSION['companyInfo'][0]['name'])){{ $_SESSION['companyInfo'][0]['name']}}@endif</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Let's Party Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    @if(isset($_SESSION['companyInfo'][0]['logo']))<link rel="icon" type="image/png" href="{{ $_SESSION['companyInfo'][0]['logo']}}">@endif
    <link href="front_reso/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="front_reso/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="front_reso/css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
    <link rel="stylesheet" href="front_reso/css/lightbox.css">
    <link rel="stylesheet" href="front_reso/css/flexslider.css" type="text/css" media="screen" />
    <script src="front_reso/js/jquery-2.2.3.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Trochut:400,400i,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <style>
        body::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        body::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        body::-webkit-scrollbar-thumb {
        //background-color: darkgrey;
        //outline: 1px solid slategrey;
            background-color: #4099ff;

            background-image: -webkit-gradient(linear, 0 0, 0 100%,
            color-stop(.5, rgba(255, 255, 255, .2)),
            color-stop(.5, transparent), to(transparent));
        }
    </style>
</head>