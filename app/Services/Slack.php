<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

/**
 * Class Slack
 * @package App\Services
 */
class Slack
{
    /**
     * @var string
     */
    protected static string $hook;

    /**
     * @var string
     */
    protected static string $channel;

    /**
     * specifying channel for slack
     *
     * @param string $channel
     * @return Slack
     */
    public static function channel($channel='default'): Slack
    {
        //we get configuration settings for slack.
        $config = config('slack.'.$channel);

        //channel and hook information.
        self::$channel = $config['channel'];
        self::$hook = $config['hook'];

        //return static object
        return new self();
    }

    /**
     * push message to slack
     *
     * @param $message
     * @return bool
     */
    public function push($message): bool
    {
        // for push notification
        // we have to specify the payload value.
        $data = "payload=" . json_encode(array(
                "channel"       =>  "#".self::$channel,
                "text"          =>  $message,
            ));

        // We are starting curl for the hook value.
        $ch = curl_init(self::$hook);

        // We are entering our curl option values for push notification.
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        //finally,return result
        return $result == 'ok';
    }
}
