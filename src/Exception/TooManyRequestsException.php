<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class TooManyRequestsException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 429;
    protected $text = "Too Many Requests";
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
    public function getText()
    {
        return $this->text;
    }

}