<?php

namespace App\Facades\Support\Env;

class Env
{
    /**
     * @return array
     */
    public static function all(): array
    {
        $envPath = base_path('.env');
        if (!file_exists($envPath)) {
            return [];
        }

        $envArray = [];
        $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) {
                continue;
            }

            list($key, $value) = explode('=', $line, 2);

            $key = trim($key);
            $value = trim($value);

            $value = trim($value, "\"'");

            $envArray[$key] = $value;
        }

        return $envArray;
    }

    /**
     * @param array $data
     * @return bool
     */
    public static function set(array $data = []): bool
    {
        $envPath = base_path('.env');
        if (!file_exists($envPath)) {
            return false;
        }

        $lines = file($envPath, FILE_IGNORE_NEW_LINES);
        $newLines = [];
        $updatedKeys = array_keys($data);
        $keysProcessed = [];

        foreach ($lines as $line) {
            $trimmedLine = trim($line);

            if ($trimmedLine === '' || str_starts_with($trimmedLine, '#')) {
                $newLines[] = $line;
                continue;
            }

            list($key) = explode('=', $trimmedLine, 2);
            $key = trim($key);

            if (in_array($key, $updatedKeys)) {
                $newLines[] = "{$key}=\"{$data[$key]}\"";
                $keysProcessed[] = $key;
            } else {
                $newLines[] = $line;
            }
        }

        foreach ($data as $key => $value) {
            if (!in_array($key, $keysProcessed)) {
                $newLines[] = "{$key}=\"{$value}\"";
            }
        }

        return file_put_contents($envPath, implode("\n", $newLines) . "\n") !== false;
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public static function get(string $key): mixed
    {
        $keys = static::all();

        return $keys[$key] ?? null;
    }
}
