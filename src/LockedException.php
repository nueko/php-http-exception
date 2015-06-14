<?php namespace Sum\Http\Exception;

class LockedException extends \Exception
{
    protected $code = 423;
    protected $message = "Locked";
    protected $explanation = "Means the source or destination resource of a method is locked.";
    protected $spec = "RFC5218#10.4";
    protected $reference = "http://tools.ietf.org/html/rfc2518#section-10.4";

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