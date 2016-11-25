<?php

namespace NovaPoshta\References\Responses;

use NovaPoshta\Response;
use NovaPoshta\References\Models\PaymentForm;

class GetPaymentFormsResponse extends Response
{
	public function setData($data, $className = PaymentForm::class)
    {
        return parent::setData($data, $className);
    }
}
