<?php

class HomeController extends BaseController {


	public function showHome()
	{
        $data['notice'] = Config::get('site.notice');
		return View::make('home', $data);
	}

}
