<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class PaymentRequiredException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 402;
    protected $message = "Payment Required";
    protected $explanation = "*reserved*";
    protected $spec = "RFC7231#6.5.2";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.2";

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