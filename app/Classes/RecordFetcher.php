<?php 

namespace LFGC\Classes;

use Carbon\Carbon;

class RecordFetcher {

	private $currentTimestamp = null;

	public function __construct(){
		$this->currentTimestamp = Carbon::now();
	}
}