<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class PayloadTooLargeException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 413;
    protected $message = "Payload Too Large";
    protected $explanation = "Indicates that the server is refusing to process a request because the request payload is larger than the server is willing or able to process";
    protected $spec = "RFC7231#6.5.11";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.11";

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