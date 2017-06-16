<!--     *********     HEADER 3      *********      -->

<div class="header-3">

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<div class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

			@foreach($latest as $position=>$post)
				@if($position == 0)
					<div class="item active">
				@else
					<div class="item">
				@endif
					<div class="page-header header-filter" style='background-image: url("{{ URL::asset($post->header) }}");'>

						<div class="container">
							<div class="row">
								<div class="col-md-6 text-left">
									<h1 class="title">{{ $post->title }}</h1>
									<h4>{{ $post->short }}</h4>
									<br />

									<div class="buttons">
										<a href="/post/{{ $post->slug }}" class="btn btn-info btn-lg">
											Read More
										</a>
										<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
											<i class="fa fa-get-pocket"></i>
										</a>
									</div>

								</div>
							</div>
						</div>
			        </div>

				</div>
			@endforeach

			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<i class="material-icons">keyboard_arrow_left</i>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<i class="material-icons">keyboard_arrow_right</i>
			</a>
		</div>
	</div>

</div>

<!--     *********    END HEADER 3      *********      -->