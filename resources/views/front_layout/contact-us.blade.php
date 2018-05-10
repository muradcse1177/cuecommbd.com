<div id="contact" class="contact">
    <div class="container">
        <h3 class="w3stitle">Contact <span> us</span></h3>
        <div class="contact-row agileits-w3layouts">
            <div class="col-md-6 col-sm-6 contact-w3lsleft">
                <div class="contact-grid agileits">
                    <h4>DROP US A LINE </h4>
                    <center><h3 id="reply"></h3><center>
                    <form id="contactUs">
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="text" name="phone" placeholder="Phone Number" required="">
                        <textarea name="comment" placeholder="Message..." required=""></textarea>
                        <input type="submit" value="Submit" >
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-w3lsright">
                <h6><span>Sed interdum </span>interdum accumsan nec purus ac orci finibus facilisis.</h6>
                <div class="address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Visit Us</h5>
                        <p>{{ $_SESSION['companyInfo'][0]['address']}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row w3-agileits">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:info@example.com"> {{ $_SESSION['companyInfo'][0]['email']}}</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-xs-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-10 address-right">
                        <h5>Call Us</h5>
                        <p>+88{{ $_SESSION['companyInfo'][0]['contact1']}},  +88{{ $_SESSION['companyInfo'][0]['contact2']}}</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- map -->
                {{--<div class="map agileits">--}}
                    {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.948805392833!2d-73.99619098458929!3d40.71914347933105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1479793484055"></iframe>--}}
                {{--</div>--}}
                <div class="map agileits">
                    <iframe src="/back_resource/images/upload/map.png"></iframe>
                </div>
                <!-- //map -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function(){

        $("#contactUs").validate({
            submitHandler: function(form) {
                $.ajax({
                    url: '/api/insertContactUs',
                    type: 'POST',
                    data: new FormData($("#contactUs")[0]),
                    dataType:'json',
                    async:false,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (typeof response.successMsg !== 'undefined')
                        {
                            document.getElementById("reply").innerHTML = response.successMsg;
                        }
                        if (typeof response.errorMsg !== 'undefined')
                        {
                            document.getElementById("reply").innerHTML = response.errorMsg;
                        }
                    }
                });
                return false;
            }
        });
    });
</script>