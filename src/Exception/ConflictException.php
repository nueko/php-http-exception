<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class ConflictException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 409;
    protected $text = "Conflict";
    protected $explanation = "Indicates that the request could not be completed due to a conflict with the current state of the resource";
    protected $spec = "RFC7231#6.5.8";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.8";

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