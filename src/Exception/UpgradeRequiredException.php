<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class UpgradeRequiredException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 426;
    protected $text = "Upgrade Required";
    protected $explanation = "Indicates that the server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.";
    protected $spec = "RFC7231#6.5.15";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.15";

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