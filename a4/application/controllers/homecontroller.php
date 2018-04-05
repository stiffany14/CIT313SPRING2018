<?php

class HomeController extends Controller{

	public function index(){
            $feed = "http://fox59.com/feed";
            $rss = new RssDisplay($feed);

            $feed_data = $rss->getChannelInfo();
            $channel_title = $feed_data->channel;
            $this->set('rss_title', $channel_title);

            $story_data = $rss->getFeedItems(8);
            $story_items = $story_data->channel->item;
            $this->set('story_items', $story_items);
            $this->set('story_title', $story_title);
	}
}
?>
