<?php


namespace Talkabot\languages;


class ResponseOption
{

    private $analysis = [];
    private $responses = [];
    private $repeat_response = true;
    private $repeat_responses = [];

    /**
     * @return array
     */
    public function getAnalysis(): array
    {
        return $this->analysis;
    }

    /**
     * @param array $analysis
     * @return ResponseOption
     */
    public function setAnalysis(array $analysis) : ResponseOption
    {
        $this->analysis = $analysis;
        return $this;
    }

    /**
     * @param string $a
     * @return ResponseOption
     */
    public function addAnalysis( string $a ) : ResponseOption
    {
        $this->analysis[] = $a;
        return $this;
    }

    /**
     * @return array
     */
    public function getResponses(): array
    {
        return $this->reponses;
    }

    /**
     * @param array $reponses
     * @return ResponseOption
     */
    public function setResponses(array $reponses): ResponseOption
    {
        $this->reponses = $reponses;
        return $this;
    }

    /**
     * @param string $r
     * @return ResponseOption
     */
    public function addResponse( string $r ) : ResponseOption
    {
        $this->responses[] = $r;
        return $this;
    }

    /**
     * @return bool
     */
    public function canRepeatResponse(): bool
    {
        return $this->repeat_response;
    }

    /**
     * @param bool $repeat_response
     * @return ResponseOption
     */
    public function setRepeatResponse(bool $repeat_response) : ResponseOption
    {
        $this->repeat_response = $repeat_response;
        return $this;
    }

    /**
     * @return array
     */
    public function getRepeatResponses(): array
    {
        return $this->repeat_responses;
    }

    /**
     * @param array $repeat_responses
     * @return ResponseOption
     */
    public function setRepeatResponses(array $repeat_responses) : ResponseOption
    {
        $this->repeat_responses = $repeat_responses;
        return $this;
    }

    public function addRepeatResponse(string $r) : ResponseOption {
        $this->repeat_response[] = $r;
        return $this;
    }

}