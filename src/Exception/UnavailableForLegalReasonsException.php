<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class UnavailableForLegalReasonsException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 451;
    protected $text = "Unavailable For Legal Reasons";
    protected $explanation = "This status code indicates that the server is denying access to the resource in response to a legal demand.";
    protected $spec = "draft-tbray-http-legally-restricted-status";
    protected $reference = "http://tools.ietf.org/html/draft-tbray-http-legally-restricted-status";

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