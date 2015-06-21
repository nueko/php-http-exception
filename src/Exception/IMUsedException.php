<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class IMUsedException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 226;
    protected $text = "IM Used";
    protected $explanation = "The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.";
    protected $spec = "RFC3229#10.4.1";
    protected $reference = "http://tools.ietf.org/html/rfc3229#section-10.4.1";

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