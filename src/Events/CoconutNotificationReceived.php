<?php
namespace AmphiBee\LaravelCoconut\Events;

use Illuminate\Queue\SerializesModels;

class CoconutNotificationReceived
{
    use SerializesModels;

    public $videoId;
    public array $params;

    public function __construct($videoId, array $params)
    {
        $this->videoId = $videoId;
        $this->params = $params;
    }
}
