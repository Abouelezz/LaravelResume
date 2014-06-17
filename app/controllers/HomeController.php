<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		//Gettng data from models


		$data['name'] = CVInfo::key('name')->value;
		$data['job'] = CVInfo::key('job')->value;
		$data['summary'] = CVInfo::key('summary')->value;

		$data['facebook'] = CVInfo::key('facebook')->value;
		$data['linkedin'] = CVInfo::key('linkedin')->value;
		$data['github'] = CVInfo::key('github')->value;
		$data['twitter'] = CVInfo::key('twitter')->value;

		$data['dob'] = CVInfo::key('dob')->value;
		$data['pob'] = CVInfo::key('pob')->value;
		$data['nationallty'] = CVInfo::key('nationallty')->value;
		$data['livesin'] = CVInfo::key('livesin')->value;

		$data['employment'] = Employment::orderBy('item_order','DESC')->get();
		$data['education'] = Education::orderBy('item_order','DESC')->get();
		$data['skills'] = Skill::orderBy('rate','DESC')->get();
		$data['testimonials'] = Testimonial::get();
		$data['hobbies'] = Hobby::get();
		$data['projects'] = Project::get();


		return View::make('home',$data);
	}

}
