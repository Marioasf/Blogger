@extends('layout.main')

@section('content')

<div class="page-header header-filter" data-parallax="active" style='background-image: url("{{ URL::asset($post->header) }}");'>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h1 class="title">{{ $post->title }}</h1>
				<h4>{{ $post->short }}</h4>
				<br />
				<a href="#main-post" class="btn btn-info btn-round btn-lg">
					<i class="material-icons">format_align_left</i> Read Article
				</a>
			</div>
		</div>
	</div>
</div>

<div class="main main-raised" id="main-post">
	<div class="container">
        <div class="section section-text">
            <div class="row">
				<div class="col-md-8 col-md-offset-2">
    				<h3 class="title">{{ $post->title }}</h3>
					<p>{{ $post->content }}</p>
				</div>

				<div class="section col-md-10 col-md-offset-1">
					@foreach($post->image_posts as $image)
						<div class="col-md-4">
							<img class="img-rounded img-responsive img-raised" alt='{{ $image->image->title }}' src='{{ URL::asset($image->image->path) }}'>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-8">
				<h4 class="media-heading"><small>Published {{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans() }}</small></h4>
			</div>
		</div>

		<div class="section section-blog-info">
            <div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-6">
							<div class="blog-tags">
								Tags:
								@foreach($post->post_tags as $tag)
									<span class="label label-info">{{ $tag->tag->title or "None"}}</span>
								@endforeach
							</div>
						</div>
						<div class="col-md-6">
							<a href="#pablo" class="btn btn-google btn-round pull-right">
								<i class="fa fa-google"></i> 232
							</a>
							<a href="#pablo" class="btn btn-twitter btn-round pull-right">
								<i class="fa fa-twitter"></i> 910
							</a>
							<a href="#pablo" class="btn btn-facebook btn-round pull-right">
								<i class="fa fa-facebook-square"></i> 872
							</a>

						</div>
					</div>

					<hr />

					<div class="card card-profile card-plain">
						<div class="row">
							<div class="col-md-6">
								<div class="tim-typo">
			                        <h4>
			                        	About the author
			                        </h4>
			                    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" alt='{{ $post->user->image->title  or "None"}}' src='{{ URL::asset($post->user->image->path) }}'>
									</a>
									<div class="ripple-container"></div>
								</div>
							</div>
							<div class="col-md-8">
								<h4 class="card-title">{{ $post->user->name or "None" }}</h4>
								<p class="description">{{ $post->user->bio or "None" }}</p>
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-default pull-right btn-round">Follow</button>
							</div>
						</div>
					</div>

				</div>
			</div>
        </div>

		<div class="section section-comments">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="media-area">
						{{-- <h3 class="title text-center">3 Comments</h3> --}}
						@foreach($post->comments as $comment)
							<div class="media">
								<a class="pull-left" href="#pablo">
									<div class="avatar">
										<img class="media-object" src='{{ URL::asset($comment->user->image->path)}}' alt='{{ $comment->user->image->title }}'/>
									</div>
								</a>
								<div class="media-body">
									<h4 class="media-heading">{{ $comment->user->name }} <small>&middot; {{ \Carbon\Carbon::createFromTimeStamp(strtotime($comment->created_at))->diffForHumans() }}</small></h4>
									<h6 class="text-muted"></h6>

									<p>{{ $comment->content }}</p>

									<div class="media-footer">
										<a href="#pablo" class="btn btn-info btn-simple pull-right" rel="tooltip" title="Reply to Comment">
											<i class="material-icons">reply</i> Reply
										</a>
										<a href="#pablo" class="btn btn-danger btn-simple pull-right">
											<i class="material-icons">favorite</i> 243
										</a>
									</div>
									@if( !empty($comment->replies) )
										@foreach($comment->replies as $reply)
											<div class="media">
											  	<a class="pull-left" href="#pablo">
													<div class="avatar">
														<img class="media-object" alt='{{ $reply->user->image->title }}' src='{{ URL::asset($reply->user->image->path) }}'>
													</div>
											  	</a>
											  	<div class="media-body">
													<h4 class="media-heading">{{ $reply->user->name }} <small>&middot; {{ \Carbon\Carbon::createFromTimeStamp(strtotime($reply->created_at))->diffForHumans() }}</small></h4>

													<p>{{ $reply->content }}</p>

													<div class="media-footer">
														<a href="#pablo" class="btn btn-info btn-simple pull-right" rel="tooltip" title="Reply to Comment">
															<i class="material-icons">reply</i> Reply
														</a>
														<a href="#pablo" class="btn btn-default btn-simple pull-right">
															<i class="material-icons">favorite</i> 2
														</a>
													</div>
											  	</div>
										  	</div>
									  	@endforeach
								  	@endif
								</div>
							</div>
						@endforeach
					</div>
					@if(!empty($user))
					  <h3 class="title text-center">Post your comment</h3>
					  <div class="media media-post">
						  <a class="pull-left author" href="#pablo">
							  <div class="avatar">
									<img class="media-object" alt="{{ $user->image->title }}" src="{{ URL::asset($user->image->path) }}">
							  </div>
						  </a>
						  <div class="media-body">
							  <form action="/comment/create" method="get" accept-charset="utf-8">
									<textarea class="form-control" id="content" placeholder="Let us know what you think" rows="6"></textarea>
									<div class="media-footer">
										 <a href="" onclick="$(this).closest('form').submit()" class="btn btn-info btn-round btn-wd pull-right">Post Comment</a>
									</div>
								</form>
						  </div>
					  </div> <!-- end media-post -->
					@else
						<h3 class="title text-center">Post your comment</h3>
					  	<div class="media media-post">
						  	<a class="pull-left author" href="#pablo">
							 	 <div class="avatar">
									<img class="media-object" alt="{{ $unknown->title }}" src="{{ URL::asset($unknown->path) }}">
							  	</div>
						  	</a>
						  	<div class="media-body">
							  	<form action="/comment/create" method="get" accept-charset="utf-8">
									<textarea class="form-control" id="content" placeholder="Let us know what you think" rows="6"></textarea>
									<div class="media-footer">
										 <a href="" onclick="$(this).closest('form').submit()" class="btn btn-info btn-round btn-wd pull-right">Post Comment</a>
									</div>
								</form>
						  	</div>
					  	</div> <!-- end media-post -->
					@endif
				</div>
			</div>
		</div>

    </div>
</div>

<div class="section">
	<div class="container">
		<div class="row">

			@if(!empty($similar))
				<div class="col-md-12">
					<h2 class="title text-center">Similar Stories</h2>
					<br />
					<div class="row">

							@foreach($similar as $story)
								<div class="col-md-4">
									<div class="card card-blog">
										<div class="card-image">
											<a href="{{ $story->slug }}">
												<img class="img img-raised" src='{{ URL::asset($story->header) }}' />
											</a>
										</div>

										<div class="content">
											<h6 class="category text-info">{{ $story->category->title }}</h6>
											<h4 class="card-title">
												<a href="{{ $story->slug }}">{{ $story->title }}</a>
											</h4>
											<p class="card-description">
												{{ $story->short }}<a href="{{ $story->slug }}"> Read More </a>
											</p>
										</div>
									</div>
								</div>
							@endforeach

					</div>

				</div>
			@endif

		</div>
	</div>
</div>
@stop