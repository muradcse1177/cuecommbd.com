@include('front_layout/header')
    <div id="gallery" class="gallery">
        <div class="container">
            <a href="/"><button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <h3 class="w3stitle">OUR <span> Gallery</span></h3>
            <a class="gallery-w3lsrow">
                @foreach ($gallery as $contents)
                    @if($contents->type=='Gallery')
                        <div class="col-sm-3 col-xs-4 gallery-grids">
                            <div class="w3ls-hover">
                                <a href="{{$contents->file}}" data-lightbox="example-set" data-title="{{$contents->description}}">
                                    <img src="{{$contents->file}}" class="img-responsive zoom-img" alt=""/>
                                    <div class="view-caption">
                                        <h5>{{$contents->name}}</h5>
                                        <span class="glyphicon glyphicon-search"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="clearfix"> </div>
            <center>{{ $gallery->links() }}</center>

        </div>
        <!--  light box js -->
        <script src="front_reso/js/lightbox-plus-jquery.min.js"> </script>
        <!-- //light box js-->
    </div>
    </div>
@include('front_layout/footer')