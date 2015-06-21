<?php namespace Sumeko\Http\Exception;

use Sumeko\Http;

class UnprocessableEntityException extends Http\ClientException implements Http\ExceptionInterface
{
    protected $code = 422;
    protected $text = "Unprocessable Entity";
    protected $explanation = "Means the server understands the content type of the request entity (hence a 415(Unsupported Media Type) status code is inappropriate), and the syntax of the request entity is correct (thus a 400 (Bad Request) status code is inappropriate) but was unable to process the contained instructions.";
    protected $spec = "RFC5218#10.3";
    protected $reference = "http://tools.ietf.org/html/rfc2518#section-10.3";

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