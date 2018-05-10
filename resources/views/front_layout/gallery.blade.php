@if(isset($_SESSION['contents'][0]['type']))
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="w3stitle">OUR <span> Gallery</span></h3>
        <a class="gallery-w3lsrow">
            @php $i=1; @endphp
            @foreach ($_SESSION['contents'] as $contents)
                @if($contents['type']=='Gallery')
                    <div class="col-sm-3 col-xs-4 gallery-grids">
                        <div class="w3ls-hover">
                            <a href="{{$contents['file']}}" data-lightbox="example-set" data-title="{{$contents['description']}}">
                                <img src="{{$contents['file']}}" class="img-responsive zoom-img" alt=""/>
                                <div class="view-caption">
                                    <h5>{{$contents['name']}}</h5>
                                    <span class="glyphicon glyphicon-search"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @php $i++;
                        if($i==9)
                        break;
                    @endphp
                @endif
            @endforeach
            <div class="clearfix"> </div>
            <a href="/fullGallery"><h2 class="w3stitle" align="right">See More <span> ---</span></h2></a>
        </div>
        <!--  light box js -->
        <script src="front_reso/js/lightbox-plus-jquery.min.js"> </script>
        <!-- //light box js-->
    </div>
</div>
@endif