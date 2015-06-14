<?php namespace Sum\Http\Exception;

class RequestTimeoutException extends \Exception
{
    protected $code = 408;
    protected $message = "Request Timeout";
    protected $explanation = "Indicates that the server did not receive a complete request message within the time that it was prepared to wait";
    protected $spec = "RFC7231#6.5.7";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.7";

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