<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class LengthRequiredException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 411;
    protected $text = "Length Required";
    protected $explanation = "Indicates that the server refuses to accept the request without a defined Content-Length";
    protected $spec = "RFC7231#6.5.10";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.10";

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