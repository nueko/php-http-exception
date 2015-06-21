<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class UnauthorizedException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 401;
    protected $text = "Unauthorized";
    protected $explanation = "Indicates that the request has not been applied because it lacks valid authentication credentials for the target resource";
    protected $spec = "RFC7235#6.3.1";
    protected $reference = "http://tools.ietf.org/html/rfc7235#section-3.1";

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