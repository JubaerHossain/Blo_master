
<script src="{{ asset('/front') }}/js/vendor/jquery-2.2.4.min.js"></script>
<!-- popper.min.js -->
<script src="{{ asset('/front') }}/js/vendor/popper.min.js"></script>
<!-- bootstrap js -->
<script src="{{ asset('/front') }}/js/bootstrap.min.js"></script>
<!-- owl.carousel.2.0.0-beta.2.4 css -->
<script src="{{ asset('/front') }}/js/owl.carousel.min.js"></script>
<!-- plugins js -->
<script src="{{ asset('/front') }}/js/plugins.js"></script>
<!-- main js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1cZtqidvg0m-f8Hd3S6RHx1mY-omuLS4"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: new google.maps.LatLng(40.712764, -74.005667),
        };

        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);


        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation: google.maps.Animation.BOUNCE,
            map: map
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script src="{{ asset('/front') }}/js/scripts.js"></script>