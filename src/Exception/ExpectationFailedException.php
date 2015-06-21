<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class ExpectationFailedException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 417;
    protected $text = "Expectation Failed";
    protected $explanation = "Indicates that the expectation given in the request's Expect header field could not be met by at least one of the inbound servers";
    protected $spec = "RFC7231#6.5.14";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.14";

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