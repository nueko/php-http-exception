<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class ProxyAuthenticationRequiredException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 407;
    protected $message = "Proxy Authentication Required";
    protected $explanation = "Is similar to 401 (Unauthorized), but indicates that the client needs to authenticate itself in order to use a proxy";
    protected $spec = "RFC7231#6.3.2";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.3.2";

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