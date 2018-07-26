<?php

namespace DesignPattern\Structural\Adapter;

interface NotificationInterface {
    public function ready(array $data);
    public function send();
}