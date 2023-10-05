<?php

namespace Eve\Http\Controllers\Front\Form;

use Eve\Http\Controllers\Front\Base\AppFormController;

use Illuminate\Http\Request;

use Eve\Models\Contactform;

class ContactformsController extends AppFormController {

	/**
	 * @var string
	 */
	protected $emailSubject;

	public function __construct() {
		parent::__construct();

		$this->emailSubject = "This is my brand new subject";

	}

	protected function make(): Contactform {
		return Contactform::create();
	}

}
