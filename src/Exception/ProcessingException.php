<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class ProcessingException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 102;
    protected $text = "Processing";
    protected $explanation = "Is an interim response used to inform the client that the server has accepted the complete request, but has not yet completed it.";
    protected $spec = "RFC5218#10.1";
    protected $reference = "http://tools.ietf.org/html/rfc2518#section-10.1";

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
        return $this->code . " " . $this->text;
    }

}