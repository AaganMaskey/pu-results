<?php

namespace App\Helper;

use App\Helper\simple_html_dom;

require_once 'simple_html_dom.php';

class Extraction
{

	public function extract()
	{
		// version 1:
		//$url = "http://pu.edu.np/edu/category/examination_notice/"; // deprecated
		// version 2:
		$url = "https://pu.edu.np/noticetype/examination/"; 
		


		//TODO:: Get keywords from user in the UI
		echo "<div class='links'>"; // this is open tag only to 
		$this->extractPageV2($url);
		echo "</div>";
	}

	/**
	 * Version: 2
	 */
	public function extractPageV2($url) 
	{
		$page = new simple_html_dom();
		$page->load_file($url);

		echo "<div class='header'>========================== Page No.: ".$this->getCount()." ================================</div>";

		$articles = $page->find('.notice-board .card-columns .card .card-body');
		$i = 1;
		foreach ($articles as $article) {
			$a = $article->find('a', 0);
			if(!is_null($a)) {
				$resultPos = stripos($a->innertext, "result");
				if($resultPos !== false){
					echo "<div class='row'>";
					$date = $article->find('p', 0);
					if(!is_null($date)){
						echo $i . " &nbsp; <code>". $date->plaintext . "</code>";
					}
					else 
					{
						echo "<span style='color:red;'>" . "No date" . "</span>";
					}
					echo "<a target='_blank' class='sub-heading' href= '" . $a->href ."'>" .$a->innertext . "</a>";
					echo "</div>";
				}
			}
			$i++;
		}
		// next page 
		$curPage = $page->find('span.current', 0);
		// clear to unset the simple-html-dom object from memory
		
		if(!is_null($curPage)){
			// next page
			$next = $curPage->next_sibling();
			if(!is_null($next)){
				$page->clear();
				unset($page);
				$this->extractPageV2($next->href);
			}
		}
		if(isset($page)){
			$page->clear();
			unset($page);
		}
	}

	/**
	 * Version: 1
	 * Deprecated due to design changes of PU website
	 */
	public function extractPage($url)
	{
		//dd('here');
		$page = new simple_html_dom();
		$page->load_file($url);

		echo "========================== ".$this->getCount()." ================================<br/>";

		$articles = $page->find('article');
		foreach ($articles as $article) {
			$head = $article->find('h3',0);
			if(!is_null($head)){
				$a = $head->find('a',0);
				if(!is_null($a)) {
					$resultPos = stripos($a->innertext, "result");
					if($resultPos !== false){
						echo $a->outertext;
						$date = $head->next_sibling();
						if(!is_null($date)){
							echo "<small>". $date->plaintext . "</small>";
						}
						else 
						{
							echo "<span style='color:red;'>" . "No date" . "</span>";
						}
						echo "<br/>";
					}
				}
			}
		}
		
		$next = $page->find('a[class=next page-numbers]',0);
		if(!is_null($next))
		{
			$this->extractPage($next->href);
		}
		$page->clear();
		unset($page);
	}

	private function getCount()
	{
		static $cnt=0;
		$cnt++;
		return $cnt;
	}
}