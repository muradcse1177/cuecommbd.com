@if(isset($_SESSION['contents'][0]['type']))
    <div id="blog" class="blog gallery">
        <div class="container">
            <h3 class="w3stitle">Our<span> Blog</span></h3>
            @php $i=1; @endphp
            @foreach ($_SESSION['contents'] as $contents)
                @if($contents['type']=='Blog')
                    @if($i%2!=0)
                        <div class="blog-agileinfo">
                            <div class="col-md-7 blog-w3grid-img">
                                <a href="#myModal" data-toggle="modal" class="wthree-blogimg">
                                    <img src="{{$contents['file']}}" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            <div class="col-md-5 blog-w3grid-text">
                                <h4><a href="#myModal" data-toggle="modal">{{$contents['name']}}</a></h4>
                                <h6>By <a href="#"> {{$contents['uploadBy']}}</a> -{{ substr($contents['time'], 10) }}</h6>
                                <p> {{$contents['description']}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endif
                    @if($i%2==0)
                        <div class="blog-agileinfo blog-agileinfo-mdl">
                            <div class="col-md-7 blog-w3grid-img blog-img-rght">
                                <a href="#myModal" data-toggle="modal" class="wthree-blogimg">
                                    <img src="{{$contents['file']}}" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            <div class="col-md-5 blog-w3grid-text">
                                <h4><a href="#myModal" data-toggle="modal">{{$contents['name']}}</a></h4>
                                <h6>By <a href="#"> {{$contents['uploadBy']}}</a> - {{ substr($contents['time'], 10) }} </h6>
                                <p>{{$contents['description']}} </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endif
                    @php $i++;
                        if($i==4)
                        break;
                    @endphp
                @endif
            @endforeach
        </div>
        <a href="/fullBlog_view"><h2 class="w3stitle" align="right">See More <span> ---</span></h2></a>
    </div>
@endif