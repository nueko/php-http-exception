<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class FailedDependencyException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 424;
    protected $text = "Failed Dependency";
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
    public function getText()
    {
        return $this->text;
    }

}