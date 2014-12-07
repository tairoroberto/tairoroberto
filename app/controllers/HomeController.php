<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		return View::make('tairo.index');
	}

	public function aboutUs()
	{
		return View::make('tairo.about-us');
	}

	public function services()
	{
		return View::make('tairo.services');
	}

	public function portifolio()
	{
		return View::make('tairo.portfolio');
	}

	public function blogSingle()
	{
		return View::make('tairo.blog-item');
	}

	public function blog()
	{
		return View::make('tairo.blog');
	}

	public function pricing()
	{
		return View::make('tairo.pricing');
	}

	public function errorPag()
	{
		return View::make('tairo.404');
	}

	public function shortCodes()
	{
		return View::make('tairo.shortcodes');
	}

	public function contact()
	{
		return View::make('tairo.contact-us');
	}

	public function contactEmail()
	{
		return View::make('tairo.email-contact');
	}


	public function sendEmail() {  

		$input = Input::all();

    Mail::send('tairo.email-contact', $input, function($message) {  
      $message->to('tairoroberto@hotmail.com')
      ->cc('contato@tairoroberto.kinghost.net')
      ->replyTo(Input::get('email'))
      ->subject(Input::get("subject"));  

    });  

    return  Redirect::to('/contact')->withErrors(('Obrigado, assim que puder entrarei em contato!'));  
  } 





}
