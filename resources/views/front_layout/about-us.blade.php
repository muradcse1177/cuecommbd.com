@if(isset($_SESSION['about_us'][0]['about']))
<div class="video-agileits jarallax">
    <div class="video">
        <div class="container">
            <div class="col-md-6 video-left">
                <h3 class="w3stitle w3stitle1">About<span> US</span></h3>
                <h4>{{ $_SESSION['about_us'][0]['heading']}} </h4>
                <p>{{ $_SESSION['about_us'][0]['about']}}</p>
            </div>
            <div class="col-md-6 video-right">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog2">
                    <span class="fa fa-play-circle-o"> </span>
                </a>
                <div id="small-dialog2" class="mfp-hide">
                    <div class="pop_up w3-agile">
                        <iframe src="https://www.youtube.com/embed/9JX4hCTuiEw"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif