<?php namespace Sumeko\Http\Exception;

class BadRequestException extends \Exception
{
    protected $code = 400;
    protected $message = "Bad Request";
    protected $explanation = "Indicates that the server cannot or will not process the request because the received syntax is invalid, nonsensical, or exceeds some limitation on what the server is willing to process";
    protected $spec = "RFC7231#6.5.1";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.1";

    /**
     * @return string
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->code . " " . $this->message;
    }

}