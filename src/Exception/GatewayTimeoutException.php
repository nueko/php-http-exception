<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class GatewayTimeoutException extends Http\ServerException implements Http\ExceptionInterface
{
    protected $code = 504;
    protected $text = "Gateway Time-out";
    protected $explanation = "Indicates that the server, while acting as a gateway or proxy, did not receive a timely response from an upstream server it needed to access in order to complete the request.";
    protected $spec = "RFC7231#6.6.5";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.6.5";

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
    public function getText()
    {
        return $this->text;
    }

}