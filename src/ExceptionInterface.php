<?php namespace Sumeko\Http;


interface ExceptionInterface
{

    /**
     * @return string
     */
    public function getSpec();

    /**
     * @return string
     */
    public function getReference();
    /**
     * @return string
     */
    public function getExplanation();

    /**
     * @return string
     */
    public function getStatus();

}