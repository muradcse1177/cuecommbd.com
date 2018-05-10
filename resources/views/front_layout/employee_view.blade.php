@include('front_layout/header')
    <div id="staff" class="team">
        <div class="container">
            <a href="/"><button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i></button></a>
            <h3 class="w3stitle">OUR <span> Staff</span></h3>
            <div class="team-agileinfo w3ls-team-row">
                @foreach ($employees as $employee)
                    <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">
                        <div class="w3ls-effect11">
                            <img src="{{$employee->file}}" alt="img">
                            <div class="overlay">
                                <div class="w3social-icons">
                                    <ul>
                                        @if(isset($employee->fblink))<li><a href="{{$employee->fblink}}"><i class="fa fa-facebook"></i></a></li>@endif
                                        @if(isset($employee->linkedlink))<li><a href="{{$employee->linkedlink}}"><i class="fa fa-linkedin"></i></a></li>@endif
                                        @if(isset($employee->twitlink))<li><a href="{{$employee->twitlink}}"><i class="fa fa-twitter"></i></a></li>@endif
                                    </ul>
                                </div>
                                <h5>{{$employee->name}}</h5>
                                <p>{{$employee->designation}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
                <center>{{ $employees->links() }}</center>
            </div>
        </div>
    </div>
@include('front_layout/footer')