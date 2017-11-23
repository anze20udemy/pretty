<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p style="text-align: center">Copyright &copy; Frizerski salon Pretty 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
{{--<script src="{{asset('js/libs.js')}}"></script>--}}

<!-- Bootstrap Core JavaScript -->
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/script.js"></script>--}}


{{--<!-- Bootstrap core JavaScript -->--}}
{{--<script src="vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="vendor/popper/popper.min.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>--}}
<script>/*
     window.onerror = function(errorMsg) {
     $('#console').html($('#console').html()+'<br>'+errorMsg)
     }*/


</script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
</script>
<script>
    // Contain the popover within the body NOT the element it was called in.
    $('[data-toggle="popover"]').popover({
        container: 'body',
        animation: true,
        placement: 'auto right',

    });
</script>
