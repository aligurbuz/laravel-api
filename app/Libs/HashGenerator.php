<?php

declare(strict_types=1);

namespace App\Libs;

use App\Exceptions\Exception;
use Illuminate\Support\Facades\Hash;

class HashGenerator
{
    /**
     * @var string
     */
    protected string $hashKey = '123abc!#,678def012txt44332211_/';

    /**
     * @var bool
     */
    private bool $recursive = false;

    /**
     * the given string value makes hashing
     *
     * @param string|array $data
     * @return string
     */
    public function encode(string|array $data): string
    {
        if (is_array($data)) {
            $data = serialize($data);
        }

        $result = '';

        for ($i = 0; $i < strlen($data); $i++) {
            $char = substr($data, $i, 1);
            $keyChar = substr($this->hashKey, ($i % strlen($this->hashKey)) - 1, 1);
            $char = chr(ord($char) + ord($keyChar));
            $result .= $char;
        }

        if($this->recursive){
            $this->recursive = false;
            return base64_encode($result);
        }

        $this->recursive = true;

        return base64_encode($result) . ':::' . $this->encode(Hash::make($data));
    }

    /**
     * the given hash string makes decoding
     *
     * @param string $string
     * @param bool $array
     * @return string|array
     */
    public function decode(string $string, bool $array = false): string|array
    {
        list($explode, $result) = $this->resolve($string);

        $mirrorHash = $this->resolve($explode[1]);

        if (!Hash::check($result, $mirrorHash[1])) {
            Exception::customException('invalidHashValue');
        }

        if ($array) {
            return unserialize($result);
        }

        return $result;
    }

    /**
     * @param string $string
     * @return array
     */
    private function resolve(string $string): array
    {
        $explode = explode(':::', $string);
        $result = '';
        $string = base64_decode($explode[0]);

        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keyChar = substr($this->hashKey, ($i % strlen($this->hashKey)) - 1, 1);
            $char = chr(ord($char) - ord($keyChar));
            $result .= $char;
        }
        return array($explode, $result);
    }
}
