
<script type="text/javascript" src="front_reso/js/jquery.fireworks.js"></script>
<script>
    setTimeout(function() {
        $('.w3-agilefireworks').fireworks();
    });
</script>
<!-- //fireworks scripts -->
<!-- timer scripts -->
<script type="text/javascript" src="front_reso/js/moment.js"></script>
<script type="text/javascript" src="front_reso/js/moment-timezone-with-data.js"></script>
<script type="text/javascript" src="front_reso/js/timer.js"></script>
<!-- //scripts -->
<!-- jarallax -->
<script src="front_reso/js/jarallax.js"></script>
<script src="front_reso/js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- //jarallax -->
<!-- ResponsiveTabs js -->
<script src="front_reso/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!-- //ResponsiveTabs js -->
<!-- Scrolling Nav JavaScript -->
<script src="front_reso/js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->
<!-- pop-up-box -->
<script src="front_reso/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //pop-up-box -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="front_reso/js/move-top.js"></script>
<script type="text/javascript" src="front_reso/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<script>

    $(document).ready(function(){

        $("#newsletter").validate({
            submitHandler: function(form) {
                $.ajax({
                    url: '/api/insertNewsletter',
                    type: 'POST',
                    data: new FormData($("#newsletter")[0]),
                    dataType:'json',
                    async:false,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (typeof response.successMsg !== 'undefined')
                        {
                            alert(response.successMsg);
                        }
                        if (typeof response.errorMsg !== 'undefined')
                        {
                            alert(response.errorMsg);
                        }
                    }
                });
                return false;
            }
        });
    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- Placed at the end of the document so the pages load faster -->
<script src="front_reso/js/bootstrap.js"></script>
</body>

<!-- Mirrored from p.w3layouts.com/demos_new/28-12-2016/lets_party-demo_Free/1546064818/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 10:51:35 GMT -->
</html>