<?php namespace Sumeko\Http\Exception;

class URITooLongException extends \Exception
{
    protected $code = 414;
    protected $message = "URI Too Long";
    protected $explanation = "Indicates that the server is refusing to service the request because the request-target is longer than the server is willing to interpret.";
    protected $spec = "RFC7231#6.5.12";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.12";

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