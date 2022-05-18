<?php

declare(strict_types=1);

namespace App\Services;

class HashGenerator
{
    /**
     * @var string
     */
    protected string $hashKey = '123abc!#,678def';

    /**
     * the given string value makes hashing
     *
     * @param string $string
     * @return string
     */
    public function encode(string $string): string
    {
        $result = '';

        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keyChar = substr($this->hashKey, ($i % strlen($this->hashKey)) - 1, 1);
            $char = chr(ord($char) + ord($keyChar));
            $result .= $char;
        }

        return base64_encode($result);
    }

    /**
     * the given hash string makes decoding
     *
     * @param string $string
     * @return string
     */
    public function decode(string $string): string
    {
        $result = '';
        $string = base64_decode($string);

        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keyChar = substr($this->hashKey, ($i % strlen($this->hashKey)) - 1, 1);
            $char = chr(ord($char) - ord($keyChar));
            $result .= $char;
        }

        return $result;
    }
}
