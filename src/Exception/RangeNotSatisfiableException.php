<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class RangeNotSatisfiableException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 416;
    protected $text = "Range Not Satisfiable";
    protected $explanation = "Indicates that none of the ranges in the request's Range header field overlap the current extent of the selected resource or that the set of ranges requested has been rejected due to invalid ranges or an excessive request of small or overlapping ranges";
    protected $spec = "RFC7233#4.4";
    protected $reference = "http://tools.ietf.org/html/rfc7233#section-4.4";

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