<?php

declare(strict_types=1);

namespace App\Factory\Http;

use App\Factory\Http\Interfaces\HttpInterface;
use App\Services\Request\Request;

/**
 * Class Http
 * @package App\Factory\Http
 */
class Http extends HttpManager implements HttpInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var Request|null
     */
    protected ?Request $request = null;

    /**
     * Http constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->request = new Request();
    }

    /**
     * get local client request
     *
     * @return Request
     */
    public function local(): Request
    {
        return $this->request->setHeaders([
                'Apikey' => '36a43836036ead1a475de70bab62ba5c',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjlmYzllYmE1YTc1MzY3NjdiNjI4MTY0YjVlNGVjMDAzMTcyYjkwNzdjMGEzZTZmMWIzMWUwZDE1YzY2YTk2NDIwZjcyMjA1NTBhMDA1ZmEiLCJpYXQiOjE2NDg2MjM1NDMuNTAyMDIsIm5iZiI6MTY0ODYyMzU0My41MDIwMjQsImV4cCI6MTY4MDE1OTU0My40ODc1Niwic3ViIjoiMjEwNiIsInNjb3BlcyI6W119.1ezgyOuYCDBz2U3PamRS7cUJ7Sp2DqzBGN-ekbe5T2BTSV5C_jy69pxFN58WFMeMmV7vwpez7zrp8JvAuCbnHqUOXRpqTPgc2fHsdBjFb4ZtGvCIRgUDGkJkk7_5u6zsqaUfhsET1f1oCvrgWWzBPa6VkRTo1KusIKNQVNeWxRtBEHZNzHGPGxj9eRI6P-sreLs3IoPqXwKOsTrtXBgBwEto11h0V4iWMAvhV0HQeEuPzg7NBYAHHatm7c3Bo6SXpDO4Qrzklwx5WJ5U3-AEI23v0DzPK7icEgqtQIW7FHjIKmxAVcfHYLkGms2TfExzjJIQ-8pPHf45Hvro1TZquA8pebvhHr9WP42eG7zOTb57CG7yJSb7pWAloK5vxmHdMDX1Gl3s449v-9K3T50fMjQ_pVagq2gH2XAIYzHN1q3GXeAb_7DUGjarMFR72X7Zj_0lHiimh6OkUGywbnNQaBrTymIHKekXpPs-EcOiVjscX2PvXInu0d0beFbYVJmFRgaFXTvP35RFbIsBjCxr_KZtp5XlBTmZmgZbgE3Gjj2aV7PcZkNIEt7hd52VoFMu7iKYcbFBVxj00lZkVQ5L-Am1iVRgI_ZIS6cWlMtvspRtZy3F7nb8oSNS7L3s8L372eFPagt07lXTmFRPQ4afVcbgXGxLhtrUiSZump22F28',
                'Accept-Language' => 'en'
            ]
        )->setUrl('http://172.10.0.13/api/public/api');
    }
}
