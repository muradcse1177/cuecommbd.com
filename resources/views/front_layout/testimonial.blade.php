@if(isset($_SESSION['contents'][0]['type']))
<div class="testimonials team">
    <div class="container">
        <h3 class="w3stitle">What <span> People say</span></h3>
        <div class="flexslider">
            <ul class="slides">
                @php $i=1; @endphp
                @foreach ($_SESSION['contents'] as $contents)
                    @if($contents['type']=='Testimonial')
                        <li>
                            <div class="testi-three-grids">
                                <div class="testi-left">
                                    <img src="{{$contents['file']}}" alt=" " class="img-responsive" />
                                </div>
                                <div class="testi-right">
                                    <p>{{$contents['description']}} </p>
                                    <h4>{{$contents['name']}}</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </li>
                        @php $i++;
                            if($i==6)
                            break;
                        @endphp
                    @endif
                @endforeach

            </ul>
        </div>
        <!-- FlexSlider js -->
        <script defer src="front_reso/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //FlexSlider js -->
    </div>
</div>
@endif