<?php namespace Sumeko\Http\Exception;

class ForbiddenException extends \Exception
{
    protected $code = 403;
    protected $message = "Forbidden";
    protected $explanation = "Indicates that the server understood the request but refuses to authorize it";
    protected $spec = "RFC7231#6.5.3";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.3";

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