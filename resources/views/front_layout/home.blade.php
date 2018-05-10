<div class="banner-text">
    @if(isset($_SESSION['companyInfo'][0]['name']))<h2>Welcome to {{ $_SESSION['companyInfo'][0]['name']}}</h2>
    <p>{{ $_SESSION['companyInfo'][0]['name']}} is one of the top most event management company in Bangladesh since 2001.</p>@endif
    <div class="agileits-timer">
        <div class="clock">
            <div class="timer days"></div>
            <div class="column">
                <div class="timer" id="hours"></div>
                <div class="text">Hours</div>
            </div>
            <div class="timer"></div>
            <div class="column">
                <div class="timer" id="minutes"></div>
                <div class="text">Minutes</div>
            </div>
            <div class="timer"></div>
            <div class="column">
                <div class="timer" id="seconds"></div>
                <div class="text">Seconds</div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>

<div class="welcome">
    <div class="welcome-agileinfo">
        <div class="col-sm-6 col-xs-6 welcome-w3left">
            <div class="col-xs-3 welcome-w3limg">
                <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
            </div>
            <div class="col-xs-9 welcome-w3ltext">
                <p>When</p>
                <h4>Since 2001</h4>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-sm-6 col-xs-6 welcome-w3right">
            <div class="col-xs-9 welcome-w3ltext">
                <p>Where</p>
                @if(isset($_SESSION['companyInfo'][0]['address']))<h4>{{ $_SESSION['companyInfo'][0]['address']}}</h4>@endif
            </div>
            <div class="col-xs-3 welcome-w3limg">
                <i class="fa fa-street-view" aria-hidden="true"></i>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('hours').innerHTML = h;
        document.getElementById('minutes').innerHTML = m;
        document.getElementById('seconds').innerHTML = s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }
</script>
<div id="hours"></div>
<div id="minutes"></div>
<div id="seconds"></div>