<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class VariantAlsoNegotiatesException extends Http\ServerException implements Http\ExceptionInterface
{
    protected $code = 506;
    protected $text = "Variant Also Negotiates";
    protected $explanation = "Indicates that the server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.";
    protected $spec = "RFC2295#8.1";
    protected $reference = "http://tools.ietf.org/html/rfc2295#section-8.1";

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