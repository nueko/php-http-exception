<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class MethodNotAllowedException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 405;
    protected $message = "Method Not Allowed";
    protected $explanation = "Indicates that the method specified in the request-line is known by the origin server but not supported by the target resource";
    protected $spec = "RFC7231#6.5.5";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.5";

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