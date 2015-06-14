<?php namespace Sumeko\Http\Exception;

class NetworkAuthenticationRequiredException extends \Exception
{
    protected $code = 511;
    protected $message = "Network Authentication Required";
    protected $explanation = "Indicates that the client needs to authenticate to gain network access.";
    protected $spec = "RFC6585#6";
    protected $reference = "http://tools.ietf.org/html/rfc6585#section-6";

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