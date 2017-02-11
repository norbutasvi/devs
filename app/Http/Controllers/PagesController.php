<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {

	}

	public function getAbout() {
		return view('about');
	}
}