<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class NotFoundException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 404;
    protected $text = "Not Found";
    protected $explanation = "Indicates that the origin server did not find a current representation for the target resource or is not willing to disclose that one exists";
    protected $spec = "RFC7231#6.5.4";
    protected $reference = "http://tools.ietf.org/html/rfc7231#section-6.5.4";

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