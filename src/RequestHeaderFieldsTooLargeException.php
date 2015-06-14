<?php namespace Sum\Http\Exception;

class RequestHeaderFieldsTooLargeException extends \Exception
{
    protected $code = 431;
    protected $message = "Request Header Fields Too Large";
    protected $explanation = "Indicates that the server is unwilling to process the request because its header fields are too large.";
    protected $spec = "RFC6585#5";
    protected $reference = "http://tools.ietf.org/html/rfc6585#section-5";

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