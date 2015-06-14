<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class PreconditionRequiredException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 428;
    protected $message = "Precondition Required";
    protected $explanation = "Indicates that the origin server requires the request to be conditional.";
    protected $spec = "RFC6585#3";
    protected $reference = "http://tools.ietf.org/html/rfc6585#section-3";

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