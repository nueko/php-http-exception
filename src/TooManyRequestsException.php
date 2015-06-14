<?php namespace Sumeko\Http\Exception;

class TooManyRequestsException extends \Exception
{
    protected $code = 429;
    protected $message = "Too Many Requests";
    protected $explanation = "Indicates that the user has sent too many requests in a given amount of time ("rate limiting").";
    protected $spec = "RFC6585#4";
    protected $reference = "http://tools.ietf.org/html/rfc6585#section-4";

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