<?php

namespace LFGC\Http\Controllers;

use LFGC\Http\Controllers\Controller;
use LFGC\Classes\RecordFetcher;

class LFGCController extends Controller {
	private $recordFetcher = null;

	public function __construct(){
		$this->recordFetcher = new RecordFetcher();
	}

	public function getIndex(){
		return view("index");
	}
}