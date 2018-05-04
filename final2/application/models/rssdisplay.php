<?php
include_once('application/libraries/adodb5/adodb.inc.php');
class RssDisplay extends Model {

	protected $feed_url;
    protected $num_feed_items;
	
	public function __construct($url){
        parent::__construct();

        $this->feed_url = $url;
	}

	public function getFeedItems() {
        $items = simplexml_load_file($this->feed_url);

        return $items;
    }

    public function getChannelInfo() {

        $items = simplexml_load_file($this->feed_url);

        return $items;
    }
  
}
