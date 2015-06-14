<?php namespace Sum\Http\Exception;

class BadGatewayException extends \Exception
{
    protected $code = 502;
    protected $message = "Bad Gateway";
    protected $explanation = "Indicates that the server, while acting as a gateway or proxy, received an invalid response from an inbound server it accessed while attempting to fulfill the request.";
    protected $spec = "RFC7231#6.6.3";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.6.3";

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