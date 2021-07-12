<?php

declare(strict_types=1);

namespace App\Services;

use Symfony\Component\HttpFoundation\ParameterBag;

class HttpPutResolve
{
    /**
     * http put resolve data for client
     *
     * @return array
     */
    public function resolve(): array
    {
        $files = [];
        $data  = [];
        // Fetch content and determine boundary
        $rawData  = file_get_contents('php://input');

        $strPosData = strpos($rawData, "\r\n");

        if(false === $strPosData) return [];
        $boundary = substr($rawData, 0, strpos($rawData, "\r\n"));
        // Fetch and process each part
        $parts = $rawData ? array_slice(explode($boundary, $rawData), 1) : [];
        foreach ($parts as $part) {
            // If this is the last part, break
            if ($part == "--\r\n") {
                break;
            }
            // Separate content from headers
            $part = ltrim($part, "\r\n");
            list($rawHeaders, $content) = explode("\r\n\r\n", $part, 2);
            $content = substr($content, 0, strlen($content) - 2);
            // Parse the headers list
            $rawHeaders = explode("\r\n", $rawHeaders);
            $headers    = array();
            foreach ($rawHeaders as $header) {
                list($name, $value) = explode(':', $header);
                $headers[strtolower($name)] = ltrim($value, ' ');
            }
            // Parse the Content-Disposition to get the field name, etc.
            if (isset($headers['content-disposition'])) {
                preg_match(
                    '/^form-data; *name="([^"]+)"(; *filename="([^"]+)")?/',
                    $headers['content-disposition'],
                    $matches
                );
                $fieldName = $matches[1];
                $fileName  = ($matches[3] ?? null);
                // If we have a file, save it. Otherwise, save the data.
                if ($fileName !== null) {
                    $localFileName = tempnam(sys_get_temp_dir(), 'sfy');
                    file_put_contents($localFileName, $content);
                    $files = $this->transformData($files, $fieldName, [
                        'name'     => $fileName,
                        'type'     => $headers['content-type'],
                        'tmp_name' => $localFileName,
                        'error'    => 0,
                        'size'     => filesize($localFileName)
                    ]);
                    // register a shutdown function to cleanup the temporary file
                    register_shutdown_function(function () use ($localFileName) {
                        unlink($localFileName);
                    });
                } else {
                    $data = $this->transformData($data, $fieldName, $content);
                }
            }
        }
        $fields = new ParameterBag($data);

        return array_merge($fields->all(),$files);
    }

    /**
     * get transform data for client
     *
     * @param $data
     * @param $name
     * @param $value
     * @return mixed
     */
    private function transformData($data, $name, $value): mixed
    {
        $isArray = strpos($name, '[]');
        if ($isArray && (($isArray + 2) == strlen($name))) {
            $name = str_replace('[]', '', $name);
            $data[$name][]= $value;
        } else {
            $data[$name] = $value;
        }
        return $data;
    }
}
