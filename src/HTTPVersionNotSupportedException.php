<?php namespace Sumeko\Http\Exception;

class HTTPVersionNotSupportedException extends \Exception
{
    protected $code = 505;
    protected $message = "HTTP Version Not Supported";
    protected $explanation = "Indicates that the server does not support, or refuses to support, the protocol version that was used in the request message.";
    protected $spec = "RFC7231#6.6.6";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.6.6";

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