<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{{$name}}} | {{{$job}}}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">




<!-- Glyphicons -->
<link href="{{{asset('css/glyphicons.css')}}}" rel="stylesheet" media="">

<style type="text/css">
	{{file_get_contents(asset('bootstrap/css/bootstrap.css'))}}
	{{file_get_contents('http://fonts.googleapis.com/css?family=Belleza')}}
	/******** LAYOUT & GENERIC CLASSES ********/

/* basic elements styling or re-styling (boostap) */
body {padding-bottom: 40px;}
#content {background-color: #fff;}
#main-content {position: relative;}
a, a:visited, a:active {outline: none!important;}
a:hover {text-decoration: none;}
h1, h2, h3, h4, h5, h6 {color: #545253; font-weight: normal;}
h1 {font-size: 50px; margin-top: 0; margin-bottom: 10px; line-height: 55px;}
h2 {margin-bottom: 20px;}
hr {border-top: 1px solid #eee;border-bottom: 1px solid #fcfcfc;}
#footer {padding-top: 20px; text-align: center; margin-top: 5px; }
.well {border-color: #ccc; margin-bottom: 30px; padding: 10px 30px;}
.well h3 {font-size: 30px;}
.icon-btn {display: inline-block; padding: 6px 0 0 10px; border-radius: 5px; height: 36px; width: 33px; margin-right: 5px;background-color: #0088CC;}
.icon-btn,.btn-primary {background-image: none; border: none; text-shadow: none; box-shadow: none;}
.tooltip.in {opacity: 1; filter: alpha(opacity=100);}
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled] {
  background-color: #005580;
  *background-color: #005580;
}

/* nav */
#sidebar.sbleft {margin-left: 0;}
.sidebar-nav {padding: 10px 0;}
#resumenav.affix {top: 30px; width: 235px; overflow: hidden; padding-left: 30px;}
#resumenav a {text-transform: uppercase; text-shadow: none; padding: 5px 30px; margin-left: -30px; margin-right: 0;}

/* tools */
.tools {position: absolute; top: 1px; right: -7px; padding-top: 30px;}
.tools a {display: block; width: 10px; height: 10px; opacity: .7; filter: alpha(opacity=70); float: left; padding: 10px; margin-left: 20px; text-align: center;}
.tools a:hover {opacity: 1; filter: alpha(opacity=100);}
.dark .tools .glyphicons i:before {color: #fff;}

/* sections */
.section.first-section {padding-top: 30px; margin-top: 0;}
.section {margin-top: 70px; margin-bottom: 20px;}
.section .section-title {display: inline-block; margin: 0 30px 30px 0; padding: 5px 30px;}
.section .section-title .glyphicons {height: 13px; font-weight: normal;}
.backgrounded .section .section-title{ margin-left: -30px;}

/* personal info block */
#personal-information h2 {margin-bottom: 10px;}
.infoline {padding: 0; overflow: hidden; border-bottom: 1px solid #eee; border-top: 1px solid #fcfcfc; padding-top: 15px; padding-bottom: 15px;}
.infoline.first {border-top: none!important;}
.infoline.last {border-bottom: none!important;}

/* helpers */
.clear {display: block; clear: both; width: 100%; height: 0; line-height: 0;}
.hidden {display: none;}
.spacer {display: block; height: 10px;}
.printonly {display: none;}

/* blog & portfolio blocks */
.blogitem, .portfolioitem {position: relative; height: 270px; margin-bottom: 30px;}
.blogitem h3 {position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,.5); color: #fff; display: block; text-align: center; padding: 4px 10px 6px; margin-bottom: 0; font-size: 15px; line-height: 20px;}
.portfolioitem h3 { margin-top: 5px; margin-bottom: 21px; color: #fff; text-align: center; font-size: 20px; line-height: 25px;}
.blogitem .blogitem-date {position: absolute; top: 0; left: 0; width: 25px; height: 35px; padding: 5px 10px; background: rgba(0,0,0,.5); color: #fff; text-align: center;}
.blogitem .blogitem-date .month, .blogitem .blogitem-date .day {font-weight: bold; display: block; font-size: 12px; line-height: 16px;}
.blogitem .blogitem-date .day {font-size: 16px;}
.blogitem .blogitem-hoverinfo, .portfolioitem .portfolioitem-hoverinfo {position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; padding: 20px 30px; font-size: 16px;}
.blogitem .blogitem-hoverinfo {padding: 30px;}
.portfolioitem .portfolioitem-hoverinfo p {opacity: .9;filter: alpha(opacity=90);}
.blogitem .blogitem-actions, .portfolioitem .portfolioitem-actions {margin-top: 30px;text-align: center;}
.blogitem .blogitem-actions a, .portfolioitem .portfolioitem-actions a{margin: 0 10px; padding: 3px 0 18px 8px; height: 20px; display: inline-block; width: 33px;}
.blogitem .blogitem-hoverinfo, .portfolioitem .portfolioitem-hoverinfo {color: #fff;}
.blogitem-content .pager, .portfolioitem-content .pager { margin-top: 30px;}
.blogitem .blogitem-hoverinfo, .portfolioitem .portfolioitem-hoverinfo {background-color: #0088CC}
#portfolio-back, #blog-back {margin-bottom: 30px;}
.blogmeta {font-size: 12px;}
.blogmeta div {display: inline-block; margin-right: 10px;}
.blogmeta .glyphicons {padding: 7px 2px 5px 15px;}
.blogmeta .glyphicons i:before{font-size: 11px; line-height: 16px; color: #999;}
#portfolio #portfolio-filters {margin-top: -2px; margin-bottom: 28px;}
.blogitem-content h2, .portfolioitem-content h2 {margin-top: 30px;}

/* contact block */
.form-horizontal .control-label {width: 80px;}
.form-horizontal .controls {margin-left: 100px;}
.add-on .glyphicons {padding: 7px 0 5px 15px;}
.add-on .glyphicons i:before{font-size: 15px;}

/* testimonials block */
.testimonial {margin-bottom: 10px; overflow: hidden;}
.testimonial small {margin-top: 10px;}
.testimonial .media .pull-left {margin-right: 15px;}

/* skills block */
.skills .label {padding: 5px 10px 7px; margin: 0 10px 14px 0; font-size: 14px; font-weight: normal;}
.skills h2.section-title {margin-bottom: 10px;}
.skills h3 {margin-bottom: 20px;}

/* hobbies block */
.hobbies .label {padding: 10px 15px; margin: 0 10px 14px 0; font-size: 14px; font-weight: normal; color: #fff;}
.hobbies .label .glyphicons {color: #fff;}
.hobbies .label.tips {cursor: pointer;}

/* Author block */
.author {margin-bottom: 30px; overflow: hidden;}
.author h1, .author h2  {display: inline-block;}
.author h2 {margin-top: 0;}

/* timeline blocks */
.timeline-item-trigger span i:before {background-color: #0088CC; display: inline-block; border: 6px solid #0088CC; border-radius: 50%; font-size: 12px;}
.timeline {background: url(images/timeline.gif) 109px 0 repeat-y;}
.dark .timeline {background-image: url(images/timelinedark.gif);}
.timeline-item {position: relative; margin-bottom: 30px; overflow: hidden;}
.timeline-item-date {float: left; width: 85px; margin-top: 31px;}
.timeline-item-trigger {float: left; width: 50px; text-align: center; padding-top: 10px;}
.timeline-item-content {float: left; width: 658px; margin-left: 15px; padding: 15px 30px; border: 1px solid #ccc; position: relative; border-radius: 5px; background-color: #f5f5f5;}
.timeline-item-trigger i {cursor: pointer;}
.timeline-item-trigger span i:before {width: 12px; height: 12px;}
.timeline-item-trigger span {display: block; margin-left: 13px; height: 15px; overflow: hidden; margin-top: 21px;}
.timeline-item-title {cursor: pointer;}
.timeline-item-content h3{font-size: 25px; line-height: 30px;}
.timeline-arrow {display: block; position: relative;}
.timeline-arrow i {display: block; background: #f9f9f9; position: absolute; height: 10px; width: 10px; top: 37px; left: -6px; border-left: 1px solid #ccc; border-top: 1px solid #ccc; left: 145px; z-index: 10; transform: rotate(-45deg); -moz-transform: rotate(-45deg); -o-transform: rotate(-45deg); -webkit-transform: rotate(-45deg); -ms-transform: rotate(-45deg); filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=-45); }
.timeline-item h4 {margin-bottom: 10px;}

/* Isotope */
.isotope-item { z-index: 2; }
.isotope-hidden.isotope-item { pointer-events: none; z-index: 1; }


/******** DARK SKIN ********/

body.dark {color:#eee; background: #1b1b1b;}
.dark #content {background: #1B1B1B;}
.dark .muted {color: #ccc;}
.dark .tooltip-inner {background: #fff; color: #000;}
.dark .tooltip.top .tooltip-arrow {border-top-color: #fff;}
.dark .tooltip.right .tooltip-arrow {border-right-color: #fff;}
.dark .tooltip.left .tooltip-arrow {border-left-color: #fff;}
.dark .tooltip.bottom .tooltip-arrow {border-bottom-color: #fff;}
.dark h1, .dark h2, .dark h3, .dark h4, .dark h5, .dark h6 {color: #fff;}
.dark hr {border-top: 1px solid #111;border-bottom: 1px solid #222;}
.dark .progress {background: #000; background-image: linear-gradient(to bottom, #191919, #111)}
.dark .alert-danger h4, .dark .alert-error h4{color: #B94A48;}
.dark .alert-success h4 {color: #468847;}
.dark .input-append .add-on, .dark .input-prepend .add-on{color: #222;}
.dark .pager li > a, .dark .pager li > span {background: #111; border-color: #000;}
.dark .pager li > a:hover {background-color: #000;}
.dark legend {color:#eee;}
.dark .infoline { border-bottom: 1px solid #111; border-top: 1px solid #222;}
.dark .well {background: #222; border-color: #000;}
.dark .timeline-item-content {border-color: #000;background-color: #222;}
.dark .timeline-arrow i {background: #222; border-left: 1px solid #000; border-top: 1px solid #000;}
.dark .nav-pills > li > a:hover {background: #333;}
.dark .skills .label, .dark .hobbies .label {background: #333; color: #fff;}
.dark .blogmeta .glyphicons i:before {color: #ccc;}

/**** CSS TRANSITIONS ****/

* {
-webkit-transition-duration: 0.20s;
   -moz-transition-duration: 0.20s;
    -ms-transition-duration: 0.20s;
     -o-transition-duration: 0.20s;
    	transition-duration: 0.20s;

-webkit-transition-property: color, background-color;
   -moz-transition-property: color, background-color;
    -ms-transition-property: color, background-color;
     -o-transition-property: color, background-color;
        transition-property: color, background-color;

-webkit-transition-timing-function: ease;
   -moz-transition-timing-function: ease;
    -ms-transition-timing-function: ease;
     -o-transition-timing-function: ease;
        transition-timing-function: ease;
}

.isotope, .isotope .isotope-item {
-webkit-transition-duration: 0.8s;
 -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
   -o-transition-duration: 0.8s;
      transition-duration: 0.8s;
}
.isotope {
-webkit-transition-property: height, width;
 -moz-transition-property: height, width;
  -ms-transition-property: height, width;
   -o-transition-property: height, width;
      transition-property: height, width;
}
.isotope .isotope-item {
-webkit-transition-property: -webkit-transform, opacity;
 -moz-transition-property:    -moz-transform, opacity;
  -ms-transition-property:     -ms-transform, opacity;
   -o-transition-property:      -o-transform, opacity;
      transition-property:         transform, opacity;
}

	{{file_get_contents(asset('css/skin.css'))}}
	{{file_get_contents(asset('css/print.css'))}}
</style>
</head>

<body class="backgrounded" data-spy="scroll" data-target=".sidebar-nav">

	<div class="container">
		<div class="row" id="content">

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