<?php namespace Sumeko\Http\Exception;

class ServiceUnavailableException extends \Exception
{
    protected $code = 503;
    protected $message = "Service Unavailable";
    protected $explanation = "Indicates that the server is currently unable to handle the request due to a temporary overload or scheduled maintenance, which will likely be alleviated after some delay.";
    protected $spec = "RFC7231#6.6.4";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.6.4";

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