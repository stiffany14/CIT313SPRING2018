<?php

class RssDisplay extends Model {

    protected $feed_url;
	protected $num_feed_items;
	

    public function __construct($url)
	{
        parent::__construct();
		
		$this->feed_url=$url;
		
		//$rssdisplay = new RssDisplay($url);

        
    }
	public function getFeedItems($num_feed_items)
	{
		$xml=simplexml_load_file($this->feed_url);
		
		$itemsarray= array();
		
		for($i=0; $i<$num_feed_items; $i++)
		{
			$itemsarray[$i] = $xml->channel->item[$i];
		
		}
		
		$this->num_feed_items=$num_feed_items;
		return $itemsarray;
	}
	public function getChannelInfo()
	{
		$xml=simplexml_load_file($this->feed_url);
		
		return $xml->channel;
		
	}
}
?>