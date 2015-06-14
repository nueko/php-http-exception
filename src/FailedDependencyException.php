<?php namespace Sumeko\Http\Exception;

class FailedDependencyException extends \Exception
{
    protected $code = 424;
    protected $message = "Failed Dependency";
    protected $explanation = "Means that the method could not be performed on the resource because the requested action depended on another action and that action failed.";
    protected $spec = "RFC5218#10.5";
    protected $reference = "http://tools.ietf.org/html/rfc2518#section-10.5";

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