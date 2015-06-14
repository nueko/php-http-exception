<?php namespace Sumeko\Http\Exception;

class InternalServerErrorException extends \Exception
{
    protected $code = 500;
    protected $message = "Internal Server Error";
    protected $explanation = "Indicates that the server encountered an unexpected condition that prevented it from fulfilling the request.";
    protected $spec = "RFC7231#6.6.1";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.6.1";

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