<?php namespace Sum\Http\Exception;

class NotImplementedException extends \Exception
{
    protected $code = 501;
    protected $message = "Not Implemented";
    protected $explanation = "Indicates that the server does not support the functionality required to fulfill the request.";
    protected $spec = "RFC7231#6.6.2";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.6.2";

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