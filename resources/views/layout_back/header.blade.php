
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Admin Panel|{{ $_SESSION['companyInfo'][0]['name']}}</title>
    <!-- Favicon-->
    <link rel="icon" href="/back_resource/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/back_resource/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/back_resource/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/back_resource/plugins/animate-css/animate.css" rel="stylesheet" />

    <link href="/back_resource/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="/back_resource/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/back_resource/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/back_resource/css/themes/all-themes.css" rel="stylesheet" />
    <link href="/back_resource/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
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

        .menu::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        .menu::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }

        .menu::-webkit-scrollbar-thumb {
        //background-color: darkgrey;
        //outline: 1px solid slategrey;
            background-color: #4099ff;

            background-image: -webkit-gradient(linear, 0 0, 0 100%,
            color-stop(.5, rgba(255, 255, 255, .2)),
            color-stop(.5, transparent), to(transparent));
        }
    </style>