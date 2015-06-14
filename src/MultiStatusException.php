<?php namespace Sum\Http\Exception;

class MultiStatusException extends \Exception
{
    protected $code = 207;
    protected $message = "Multi-Status";
    protected $explanation = "Provides status for multiple independent operations.";
    protected $spec = "RFC5218#10.2";
    protected $reference = "http://tools.ietf.org/html/rfc2518#section-10.2";

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