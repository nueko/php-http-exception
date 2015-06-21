<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class PermanentRedirectException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 308;
    protected $text = "Permanent Redirect";
    protected $explanation = "The target resource has been assigned a new permanent URI and any future references to this resource SHOULD use one of the returned URIs. [...] This status code is similar to 301 Moved Permanently (Section 7.3.2 of rfc7231), except that it does not allow rewriting the request method from POST to GET.";
    protected $spec = "RFC7238";
    protected $reference = "http://tools.ietf.org/html/rfc7238";

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