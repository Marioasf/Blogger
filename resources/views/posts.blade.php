
<div class="blogs-2" id="blogs-2">

	<div class="container">
		<div class="row">

			<div class="col-md-10 col-md-offset-1">
				<h2 class="title">Latest Blogposts</h2>

				<br />

				@foreach($posts->chunk(3) as $items)

					<div class="row">

					@foreach($items as $post)

					<div class="col-md-4">
						<div class="card card-plain card-blog">
							<div class="card-image">
								<a href="/post/{{ $post->slug }}">
									{{-- <img class="img img-raised" src="{{ URL::asset('$post->thumbnail') }}" /> --}}
									<img class="img img-raised" src="{{ URL::asset($post->thumbnail) }}" />
								</a>
							</div>
							<div class="content">
								<h6 class="category text-info">{{ $post->category->title }}</h6>
								<h4 class="card-title">
									<a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
								</h4>
								<p class="card-description">
									{{ $post->short }}
									<br><a href="/post/{{ $post->slug }}"> Read More </a>
								</p>
								<p><b>Author: <span class="text-primary">{{ $post->user->name }}</span></b></p>
								<div class="row">
									<div class="col-md-12">
										<h4 class="media-heading"><small>Published {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</small></h4>
									</div>
								</div>
							</div>
						</div>
					</div>

					@endforeach

					</div>

				@endforeach

			</div>
		</div>
	</div>
</div>

