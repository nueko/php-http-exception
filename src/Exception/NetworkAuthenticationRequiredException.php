<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class NetworkAuthenticationRequiredException extends Http\ServerException implements Http\ExceptionInterface
{
    protected $code = 511;
    protected $text = "Network Authentication Required";
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
        return $this->code . " " . $this->text;
    }

}