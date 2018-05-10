<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="startTime()">
<div id="home" class="w3ls-banner w3-agilefireworks jarallax">
    <div class="header-w3layouts">
        <nav class="navbar navbar-default navbar-fixed-top">
            <h1 float="left"><a class="navbar-brand" href="/">@if(isset($_SESSION['companyInfo'][0]['name'])){{ $_SESSION['companyInfo'][0]['name']}}@endif</a></h1>
            <div class="container">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right cl-effect-15">
                        <li><a class="page-scroll" href="#home" data-hover="Home">Home</a></li>
                        <li><a class="page-scroll" href="#services" data-hover="Services">Services</a></li>
                        <li><a class="page-scroll" href="#staff" data-hover="Our Staff">Our Staff</a></li>
                        <li><a class="page-scroll" href="#gallery" data-hover="Gallery">Gallery</a></li>
                        <li><a class="page-scroll" href="#blog" data-hover="Blog">Blog</a></li>
                        <li><a class="page-scroll" href="/career" data-hover="Career">Career</a></li>
                        <li><a class="page-scroll" href="#contact" data-hover="Contact">Contact</a></li>
                        <li class="w3ls-navlog"><a class="page-scroll" href="/login" data-toggle="modal" data-hover="LOGIN">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>