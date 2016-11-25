<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\PaymentForm;

class PaymentFormsResponse extends Response
{
	public function __construct()
	{
		parent::__construct(PaymentForm::class);
	}
}
