<?php

namespace NovaPoshta\Responses;

class Response
{
    protected $success;
    protected $errors;
    protected $warnings;
    protected $info;
    protected $messageCodes;
    protected $errorCodes;
    protected $infoCodes;

    public function __construct()
    {
    }

    public function setSuccess($success)
    {
        $this->success = (in_array($success, ['true', true])) ? true : false;
    }

    public function isSuccess()
    {
        return $this->success;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getWarnings()
    {
        return $this->warnings;
    }

    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo($info)
    {
        $this->info = $info;
    }

    public function getMessageCodes()
    {
        return $this->messageCodes;
    }

    public function setMessageCodes($messageCodes)
    {
        $this->messageCodes = $messageCodes;
    }

    public function getErrorCodes()
    {
        return $this->errorCodes;
    }

    public function setErrorCodes($errorCodes)
    {
        $this->errorCodes = $errorCodes;
    }

    public function getInfoCodes()
    {
        return $this->infoCodes;
    }

    public function setInfoCodes($infoCodes)
    {
        $this->infoCodes = $infoCodes;
    }
}
