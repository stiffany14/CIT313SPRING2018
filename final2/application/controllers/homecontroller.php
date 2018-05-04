<?php

class HomeController extends Controller{
	
	public function index(){

        $rss = new RssDisplay("http://www.fox59.com/feed");

        $items = $rss->getFeedItems();

        $this->set('items', $items);


	}

}
