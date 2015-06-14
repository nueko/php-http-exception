<?php namespace Sumeko\Http\Exception;

class InsufficientStorageException extends \Exception
{
    protected $code = 507;
    protected $message = "Insufficient Storage";
    protected $explanation = "Means the method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.";
    protected $spec = "RFC5218#10.6";
    protected $reference = "http://tools.ietf.org/html/rfc2518#section-10.6";

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