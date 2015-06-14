<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class GoneException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 410;
    protected $message = "Gone";
    protected $explanation = "Indicates that access to the target resource is no longer available at the origin server and that this condition is likely to be permanent";
    protected $spec = "RFC7231#6.5.9";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.9";

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