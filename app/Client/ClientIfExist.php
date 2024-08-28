<?php

namespace App\Client;

/**
 * This usage is a scenario where if a key is at a certain value in the client message,
 * then the following keys must be mandatory or these keys must be excluded.
 * @using $this->ifExist()->def('inputKey','inputValue',['mustInputKey'],['exceptInputKey']
 */
class ClientIfExist
{
    /**
     * @var array
     */
    protected array $inputs = [];

    /**
     * @var array
     */
    protected array $values = [];

    /**
     * @var array
     */
    protected array $mustValues = [];

    /**
     * @var array
     */
    protected array $exceptValues = [];

    /**
     * @param string $input
     * @param string $value
     * @param array $must
     * @param array $except
     * @return void
     */
    public function def(string $input, string $value, array $must = [], array $except = []): void
    {
        if (!in_array($input, $this->inputs, true)) {
            $this->inputs[] = $input;
        }

        $this->values[$input][] = $value;
        $this->mustValues[$input][$value] = $must;
        $this->exceptValues[$input][$value] = $except;
    }

    /**
     * @return array
     */
    public function getInputs(): array
    {
        return $this->inputs;
    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @return array
     */
    public function getMustValues(): array
    {
        return $this->mustValues;
    }

    /**
     * @return array
     */
    public function getExceptValues(): array
    {
        return $this->exceptValues;
    }
}
