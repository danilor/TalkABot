<?php

namespace Talkabot\languages;

/**
 * Class Interaction
 * @package Talkabot\languages
 */
class Interaction
{
    /**
     * @var int
     */
    private $id             =   0;
    /**
     * @var string
     */
    private $identifier     =   "";
    /**
     * @var string
     */
    private $input          =   "";
    /**
     * @var string
     */
    private $output         =   "";
    /**
     * @var string
     */
    private $topic          =   "";
    /**
     * @var array
     */
    private $resources      =   [];
    /**
     * @var array
     */
    private $emotions = [
        "love"          =>          0,
        "excitement"    =>          0,
        "peacefulness"  =>          0,
        "interest"      =>          0,
        "gratitude"     =>          0,
        "empathy"       =>          0,
    ];

    /**
     * @var
     */
    private $input_date;
    /**
     * @var
     */
    private $output_date;

    /**
     * Interaction constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getInput(): string
    {
        return $this->input;
    }

    /**
     * @param string $input
     */
    public function setInput(string $input)
    {
        $this -> input_date = new \DateTime();
        $this->input = $input;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * @param string $output
     */
    public function setOutput(string $output)
    {
        $this -> output_date = new \DateTime();
        $this->output = $output;
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     */
    public function setTopic(string $topic)
    {
        $this->topic = $topic;
    }

    /**
     * @return array
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * @param array $resources
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;
    }

    /**
     * @param string $emotion
     * @param int $value
     */
    public function setEmotion(string $emotion , int $value)
    {
        $this->emotions[ $emotion ] = $value;
    }

    /**
     * @param string $emotion
     * @return int
     */
    public function getEmotion( string $emotion ) : int
    {
        return (int)@$this->emotions[ $emotion ];
    }

    /**
     * @return mixed
     */
    public function getInputDate() : \DateTime
    {
        return $this->input_date;
    }

    /**
     * @return mixed
     */
    public function getOutputDate() : \DateTime
    {
        return $this->output_date;
    }
}
