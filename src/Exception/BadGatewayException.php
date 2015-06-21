<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class BadGatewayException extends Http\ServerException implements Http\ExceptionInterface
{
    protected $code = 502;
    protected $text = "Bad Gateway";
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
    public function getText()
    {
        return $this->text;
    }

}