<?php namespace Sumeko\Http\Exception;

class UnsupportedMediaTypeException extends \Exception
{
    protected $code = 415;
    protected $message = "Unsupported Media Type";
    protected $explanation = "Indicates that the origin server is refusing to service the request because the payload is in a format not supported by the target resource for this method";
    protected $spec = "RFC7231#6.5.13";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.13";

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