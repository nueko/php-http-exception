<?php namespace Sum\Http\Exception;

class UnauthorizedException extends \Exception
{
    protected $code = 401;
    protected $message = "Unauthorized";
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
    public function getStatus()
    {
        return $this->code . " " . $this->message;
    }

}