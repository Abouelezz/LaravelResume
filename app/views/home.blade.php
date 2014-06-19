<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{{$name}}} | {{{$job}}}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- jQuery -->
	<script src="{{{asset('js/jquery.min.js')}}}"></script><!-- local jquery -->
	<!--
	online version of jquery
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
-->

<!-- Bootstrap -->
<link href="{{{asset('bootstrap/css/bootstrap.css')}}}" rel="stylesheet" media="">
<link href="{{{asset('bootstrap/css/bootstrap-responsive.min.css')}}}" rel="stylesheet" media="screen">
<script src="{{{asset('bootstrap/js/bootstrap.min.js')}}}"></script>

<!-- Glyphicons -->
<link href="{{{asset('css/glyphicons.css')}}}" rel="stylesheet" media="">

<!-- Plugins -->
<script src="{{{asset('js/jquery.easing.1.3.js')}}}"></script>
<script src="{{{asset('js/jquery.isotope.min.js')}}}"></script>
<script src="{{{asset('js/jquery.ba-resize.min.js')}}}"></script>


<script src="{{{asset('js/klass.min.js')}}}"></script>



<!-- Theme -->
<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
<link href="{{{asset('css/style.css')}}}" rel="stylesheet" media="">

<!-- Skin -->
<link type="text/css" rel="stylesheet" href="{{{asset('css/skin.css')}}}" media="">

<link href="{{{asset('css/style-responsive.css')}}}" rel="stylesheet" media="">

<script src="{{{asset('js/scripts.js')}}}"></script>


	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="./css/ie.css" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- PRINT CSS -->
	<link type="text/css" rel="stylesheet" href="{{{asset('css/print.css')}}}" media="print">


</head>

<body class="backgrounded" data-spy="scroll" data-target=".sidebar-nav">

	<div class="navbar navbar-inverse navbar-fixed-top visible-phone noprint " id="phone-navbar">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">{{{$name}}}</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="#about-me" class="scroller">About me</a></li>
						<li><a href="#personal-information" class="scroller">Personal Info</a></li>
						<li><a href="#employment" class="scroller">Employment</a></li>
						<li><a href="#education" class="scroller">Education</a></li>
						<li><a href="#skills" class="scroller">Skills</a></li>
						<li><a href="#testimonials" class="scroller">Testimonials</a></li>
						<li><a href="#projects" class="scroller">Portfolio</a></li>
						<li><a href="#hobbies" class="scroller">Hobbies</a></li>
						{{--<li><a href="#contact" class="scroller">Contact</a></li>--}}
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div><!--/#phone-navbar -->

	<div class="container">
		<div class="row" id="content">



			<div class="span3 sbleft noprint" id="sidebar">
				<div class="sidebar-nav equal hidden-phone">
					<ul class="nav nav-list affix" id="resumenav">
						<li><a href="#about-me" class="scroller">About me</a></li>
						<li><a href="#personal-information" class="scroller">Personal Info</a></li>
						<li><a href="#employment" class="scroller">Employment</a></li>
						<li><a href="#education" class="scroller">Education</a></li>
						<li><a href="#skills" class="scroller">Skills</a></li>
						<li><a href="#testimonials" class="scroller">Testimonials</a></li>
						<li><a href="#projects" class="scroller">Projects</a></li>
						<li><a href="#hobbies" class="scroller">Hobbies</a></li>
						{{--<li><a href="#contact" class="scroller">Contact</a></li>--}}
					</ul>
				</div><!--/sidebar-nav -->
				<span class="clear"></span>
			</div><!--/span3 -->


			<!-- MAIN CONTENT -->
			<div class="span9 equal" id="main-content">

				<div class="tools noprint visible-desktop">
					<a href="javascript:if(window.print)window.print()" title="Print" data-placement="bottom" class="tips glyphicons print"><i></i></a>
					<a href="#" title="Download" data-placement="bottom" class="tips glyphicons file_import"><i></i></a>
				</div>


				<div class="section first-section" id="about-me">
					<div class="row author">
						<div class="span3">
							<img class="img-rounded" src="./images/portrait.jpg" alt="">
						</div>
						<div class="span6" class="name">
							<h1>{{{$name}}}</h1><br/>
							<h2 class="primary-color">{{{$job}}}</h2>
						</div>
					</div>



					<div class="well">
						<p class="lead">{{nl2br($summary)}}</p>
					</div>

					<div class="social-media noprint">
						<h5>Follow me</h5>
						<div>
							<div class="tips icon-btn" title="Facebook" data-placement="bottom"><a href="{{{$facebook}}}" target="_blank" class="glyphicons white facebook"><i></i></a></div>
							<div class="tips icon-btn" title="Twitter" data-placement="bottom"><a href="https://twitter.com/{{{$twitter}}}" target="_blank" class="glyphicons white twitter"><i></i></a></div>
							<div class="tips icon-btn" title="Linkedin" data-placement="bottom"><a href="{{{$linkedin}}}" target="_blank" class="glyphicons white linked_in"><i></i></a></div>
							<div class="tips icon-btn" title="github" data-placement="bottom"><a href="{{{$github}}}" target="_blank" class="glyphicons white github"><i></i></a></div>
						</div>
					</div>
				</div><!--/section-->

				<div class="section" id="personal-information">
					<h2 class="section-title"><span class="glyphicons user"><i></i></span>Personal Information<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>

					<div class="row">
						<div class="infoline span9 first"><div class="row">
							<div class="span2 muted">Date of birth</div>
							<div class="span7">{{{$dob}}}</div>
						</div></div>
						<span class="clear"></span>

						<div class="infoline span9"><div class="row">
							<div class="span2 muted">Place of Birth</div>
							<div class="span7">{{{$pob}}}</div>
						</div></div>
						<span class="clear"></span>

						<div class="infoline span9"><div class="row">
							<div class="span2 muted">Nationallty</div>
							<div class="span7">
								{{{$nationallty}}}
							</div>
						</div></div>
						<span class="clear"></span>

						<div class="infoline span9 "><div class="row">
							<div class="span2 muted">Lives in</div>
							<div class="span7">{{{$livesin}}}</div>
						</div></div>
						<span class="clear"></span>

						<div class="infoline span9 "><div class="row">
							<div class="span2 muted">Mobile Number (Egypt)</div>
							<div class="span7">{{{$phone_egypt}}}</div>
						</div></div>
						<span class="clear"></span>


						<div class="infoline span9 last"><div class="row">
							<div class="span2 muted">Mobile Number (UAE)</div>
							<div class="span7">{{{$phone_uae}}}</div>
						</div></div>
						<span class="clear"></span>

					</div>
				</div><!--/section-->

				<div class="section" id="employment">
					<h2 class="section-title"><span class="glyphicons share_alt"><i></i></span>Employment<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>

					<div class="timeline">

						@foreach ($employment as $position)
						<div class="timeline-item">
						<div class="timeline-item-date">{{{date('Y', strtotime($position->start))}}} - {{{date('Y', strtotime($position->end))}}}</div>
							<div class="timeline-item-trigger"><span class="glyphicons white circle_minus" data-toggle="collapse" data-target="#position{{{$position->id}}}"><i></i></span></div>
							<div class="timeline-arrow"><i></i></div>
							<div class="timeline-item-content">
								<h3 class="timeline-item-title" data-toggle="collapse" data-target="#position{{{$position->id}}}">{{{$position->role}}} @ {{{$position->company_name}}}</h3>
								<div class="collapse in" id="position{{{$position->id}}}">
									<p><small class="muted">{{{$position->start}}} - {{{$position->end}}}</small></p>
									{{$position->descr}}
								</div>
							</div>
						</div><!--/timeline-item-->
						<span class="clear"></span>
						@endforeach
					</div><!--/timeline -->
				</div><!--/section-->


				<div class="section" id="education">
					<h2 class="section-title"><span class="glyphicons certificate"><i></i></span>Education<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>

					<div class="timeline">
						@foreach ($education as $course)
						<div class="timeline-item">
							<div class="timeline-item-date">{{{$course->start}}} - {{{$course->end}}}</div>
							<div class="timeline-item-trigger"><span class="glyphicons white circle_minus" data-toggle="collapse" data-target="#education1"><i></i></span></div>
							<div class="timeline-arrow"><i></i></div>
							<div class="timeline-item-content">
								<h3 class="timeline-item-title" data-toggle="collapse" data-target="#education{{{$course->id}}}">{{{$course->institute_name}}}</h3>
								<div class="collapse in" id="education{{{$course->id}}}">
									<h4 class="media-heading primary-color">{{{$course->certificate_name}}}</h4>
								</div>
							</div>
						</div><!--/timeline-item-->
						<span class="clear"></span>
						@endforeach

					</div><!--/timeline -->

				</div><!--/section-->


				<div class="section skills" id="skills">
					<h2 class="section-title"><span class="glyphicons cogwheels"><i></i></span>Skills<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>
					<br />
					@foreach ($skills as $skill)
					<span class="label label-info label-big">{{{$skill->skill}}}</span>
					@endforeach

				</div><!--/section-->

				<div class="section" id="testimonials">
					<h2 class="section-title"><span class="glyphicons comments"><i></i></span>Testimonials<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>
					@foreach ($testimonials as $testimonial)
					<div class="testimonial">
						<div class="media">
							@if($testimonial->photo)<img style="width:100px;" class="media-object pull-left img-rounded" src="{{{$testimonial->photo}}}" alt="">@endif
							<div class="media-body">
								<blockquote>
									<p>{{{$testimonial->word}}}</p>
									<small><a href="#" title="">{{{$testimonial->name}}}</a></small>
								</blockquote>
							</div>
						</div>
					</div>
					@endforeach

				</div><!--/section-->





				<div class="section" id="projects">
					<h2 class="section-title"><span class="glyphicons comments"><i></i></span>Projects<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>
					@foreach ($projects as $project)

					<div class="row">
						<div class="span2"><img class="media-object pull-left img-rounded" style="width:150px;" src="{{{asset('files/'.$project->photos()[0])}}}" alt=""></div>
						<div class="span7">
							<h2>{{{$project->name}}}</h2>
							<p>{{{$project->descr}}}</p>
									<b>Skills Needed:</b> @foreach ($project->skills() as $skill)<span class="label label-info">{{{$skill}}}</span> @endforeach<br />
									@if($project->url)<b>URL:</b> <a href="{{{$project->url}}}">{{{$project->url}}}</a>@endif
						</div>
					</div>
<hr />
					@endforeach

				</div><!--/section-->

				<span class="clear"></span>
				<div class="section hobbies" id="hobbies">
					<h2 class="section-title"><span class="glyphicons heart_empty"><i></i></span>Hobbies<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>

					<div class="row">
						<div class="span9">
							@foreach ($hobbies as $hobby)
							<span class="label"><span class="glyphicons white {{{$hobby->icon}}}"><i></i>{{{$hobby->name}}}</span></span>
							@endforeach

						</div>
					</div>

				</div><!--/section-->
				{{--
				<span class="clear"></span>
				<div class="section noprint" id="contact">
					<h2 class="section-title"><span class="glyphicons message_flag"><i></i></span>Contact<a href="#phone-navbar" class="top visible-phone"><span class="glyphicons white up_arrow"><i></i></span></a></h2>


					<div class="alert alert-info">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Make sure to fill all the fields with correct values before sending your email!
					</div>

					<form method="post" action="#contact" class="form-horizontal">
						<fieldset>
							<legend>Send me a message using the form below</legend>

							<div class="control-group">
								<label class="control-label" for="form-subject">Subject</label>
								<div class="controls">
									<div class="input-append">
										<input type="text" placeholder="Subject" id="form-subject" name="subject" class="input-xlarge" value="">
										<span class="add-on"><span class="glyphicons circle_question_mark"><i></i></span></span>
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="form-subject">Your Email</label>
								<div class="controls">
									<div class="input-append">
										<input type="email" placeholder="Your Email" id="form-email" name="subject" class="input-xlarge" value="">
										<span class="add-on"><span class="glyphicons envelope"><i></i></span></span>
									</div>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label" for="form-message">Message</label>
								<div class="controls">
									<div class="input-append">
										<textarea rows="6" placeholder="message" id="form-message" name="message" class="input-xlarge"></textarea>
										<span class="add-on"><span class="glyphicons pen"><i></i></span></span>
									</div>
								</div>
							</div>

							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn btn-primary input-medium" name="submit" id="contact-submit">Submit</button>
								</div>
							</div>


						</fieldset>
					</form>
				</div><!--/section-->--}}

			</div><!--/span9-->
			<!-- END OF THE MAIN CONTENT -->

		</div><!--/row-->

		<div id="footer">
			<p>&copy; Ahmed Abouelezz - {{{date('Y')}}}</p>
		</div>

	</div><!--/.container-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52043013-1', 'ahmedabdellatif.com');
  ga('send', 'pageview');
</script>
</body>
</html>