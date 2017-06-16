<!--   Core JS Files   -->
<script src="{{ URL::asset('/assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('/assets/js/material.min.js') }}"></script>

<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ URL::asset('/assets/js/nouislider.min.js') }}" type="text/javascript"></script>

<!--	Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{ URL::asset('/assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
<script src="{{ URL::asset('/assets/js/jquery.dropdown.js') }}" type="text/javascript"></script>

<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="{{ URL::asset('/assets/js/jquery.tagsinput.js') }}"></script>

<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ URL::asset('/assets/js/jasny-bootstrap.min.js') }}"></script>

<!-- Plugin For Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ URL::asset('/assets/js/material-kit.js') }}" type="text/javascript"></script>

<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
<script src="{{ URL::asset('/assets/assets-for-demo/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('/assets/assets-for-demo/vertical-nav.js') }}" type="text/javascript"></script>

<script type="text/javascript">

	$().ready(function(){
		$('#sliderRegular').noUiSlider({
            start: 40,
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });

        $('#sliderDouble').noUiSlider({
            start: [20, 60] ,
            connect: true,
            range: {
                min: 0,
                max: 100
            }
        });

	});
</script>