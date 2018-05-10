<div class="features">
    <div class="container">
        <div class="wthree-features-row">
            <div class="col-md-4 col-xs-6 features-w3grid">
                <div class="col-xs-4 features-w3lleft">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="col-xs-8 features-w3lright">
                    <p>LOCATION</p>
                    <h4>{{ $_SESSION['companyInfo'][0]['address']}}</h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 col-xs-6 features-w3grid">
                <div class="col-xs-4 features-w3lleft">
                    <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                </div>
                <div class="col-xs-8 features-w3lright">
                    <p>EVENTS</p>
                    <h4>750+ Events</h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-4 col-xs-6 features-w3grid">
                <div class="col-xs-4 features-w3lleft">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="col-xs-8 features-w3lright">
                    <p>CUSTOMERS</p>
                    <h4>12,000+</h4>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copyw3-agile">
    <div class="container">
        <div class="w3social-icons footer-w3icons">
            <ul>
                @if(isset( $_SESSION['companyInfo'][0]['fblink']))<li><a href="{{$_SESSION['companyInfo'][0]['fblink']}}"><i class="fa fa-facebook"></i></a></li>@endif
                @if(isset( $_SESSION['companyInfo'][0]['twitlink']))<li><a href="{{$_SESSION['companyInfo'][0]['twitlink']}}"><i class="fa fa-twitter"></i></a></li>@endif
                @if(isset( $_SESSION['companyInfo'][0]['youlink']))<li><a href="{{$_SESSION['companyInfo'][0]['youlink']}}"><i class="fa fa-youtube"></i></a></li>@endif
                @if(isset( $_SESSION['companyInfo'][0]['instalink']))<li><a href="{{$_SESSION['companyInfo'][0]['instalink']}}"><i class="fa fa-instagram"></i></a></li>@endif
                @if(isset( $_SESSION['companyInfo'][0]['linkedlink']))<li><a href="{{$_SESSION['companyInfo'][0]['linkedlink']}}"><i class="fa fa-linkedin"></i></a></li>@endif
            </ul>
        </div>
        <p>© @php echo date("Y"); @endphp {{ $_SESSION['companyInfo'][0]['name']}}. All Rights Reserved | Design by  <a href="http://parallaxsoft.com//" target="_blank">Parallax Soft Inc.</a> </p>
    </div>
</div>