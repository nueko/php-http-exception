<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class NotAcceptableException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 406;
    protected $text = "Not Acceptable";
    protected $explanation = "Indicates that the target resource does not have a current representation that would be acceptable to the user agent, according to the proactive negotiation header fields received in the request, and the server is unwilling to supply a default representation";
    protected $spec = "RFC7231#6.5.6";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.6";

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
    public function getText()
    {
        return $this->text;
    }

}