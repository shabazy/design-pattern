<?php 

namespace DesignPattern\Structural\Adapter;

interface SmsNotificationInterface {
    public function senderInfo(array $data);
    public function sendPush();
}