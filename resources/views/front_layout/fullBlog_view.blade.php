@include('front_layout/header')
    <div id="blog" class="blog gallery">
        <div class="container">
            <a href="/"><button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <h3 class="w3stitle">Our<span> Blog</span></h3>
            @php $i=1; @endphp
            @foreach ($blog as $contents)
                @if($contents->type=='Blog')
                    @if($i%2!=0)
                        <div class="blog-agileinfo">
                            <div class="col-md-7 blog-w3grid-img">
                                <a href="#myModal" data-toggle="modal" class="wthree-blogimg">
                                    <img src="{{$contents->file}}" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            <div class="col-md-5 blog-w3grid-text">
                                <h4><a href="#myModal" data-toggle="modal">{{$contents->name}}</a></h4>
                                <h6>By <a href="#"> {{$contents->uploadBy}}</a> -{{ substr($contents->time, 10) }}</h6>
                                <p> {{$contents->description}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endif
                    @if($i%2==0)
                        <div class="blog-agileinfo blog-agileinfo-mdl">
                            <div class="col-md-7 blog-w3grid-img blog-img-rght">
                                <a href="#myModal" data-toggle="modal" class="wthree-blogimg">
                                    <img src="{{$contents->file}}" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            <div class="col-md-5 blog-w3grid-text">
                                <h4><a href="#myModal" data-toggle="modal">{{$contents->name}}</a></h4>
                                <h6>By <a href="#"> {{$contents->uploadBy}}</a> - {{ substr($contents->time, 10) }} </h6>
                                <p>{{$contents->description}} </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endif
                @endif
                    @php
                        $i++;
                    @endphp
            @endforeach
        </div>
        <center>{{ $blog->links() }}</center>
    </div>
@include('front_layout/footer')