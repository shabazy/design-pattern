<?php

namespace DesignPattern\Structural\DependencyInjection;

class TwitterFeed implements FeedInterface {
	public function getMessages() {
		return [];
	}
}