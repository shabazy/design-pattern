<?php

namespace DesignPattern\Structural\DependencyInjection;

class FacebookFeed implements FeedInterface {
    public function getMessages() : array {
        return ['likes', 'commments'];
    }
}