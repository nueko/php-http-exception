<?php namespace Sum\Http\Exception;

class PreconditionFailedException extends \Exception
{
    protected $code = 412;
    protected $message = "Precondition Failed";
    protected $explanation = "Indicates that one or more preconditions given in the request header fields evaluated to false when tested on the server";
    protected $spec = "RFC7232#4.2";
    protected $reference = "http://tools.ietf.org/html/rfc7232#section-4.2";

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