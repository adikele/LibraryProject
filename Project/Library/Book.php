<?php

include_once("Person.php");
class Book{
	private $title;
	private $genre;
	private $pages;
	private $readerID;
	private $authorID;
    private $authorDetails = array();
	private $readerDetails = array(); 
	private $picture;
	// 1. $readerDetails is an array of objects:
	// each cell of the array will be passed an object of class Reader;	
	// this object will have all details of one reader.
	// 2. Similarly for $authorDetails
	
	public function __construct($title, $genre, $pages, $readerID, $authorID)
	{
		$this->title=$title;
		$this->genre=$genre;
		$this->pages=$pages;
		$this->readerID=$readerID;
		$this->authorID=$authorID; 	
	}
	
	public function getGenre(){
		return $this->genre;
	}
	
	
	public function getReaderID(){
		return $this->readerID;
	}
	
    public function getAuthorID(){
		return $this->authorID;
	}
	
	public function addReader($readerData){
         $this->readerDetails[0] = $readerData;
        	// the entire readerData object passed to this function is stored in this object's readerDetails[0] 
	}
	
    public function addAuthor($authorData){
         $this->authorDetails[0] = $authorData;
        	// the entire authorData object passed to this function is stored in this object's authorDetails[0] 
	}

 
	
	public function __toString(){
		$sum = 0;
		$i = 0;
		$text .='<div class="book_wrap">';
		$text .="<h3>Name of book: </h3>";
		$text .= '<div class="book_title">'.$this->title.'</div>' ;
		$text .= '<span class="category">category:</span>';
		$text .= '<span >'. $this->genre."</span><br>";
		$text .= '<span class="pages">pages:</span>';
		$text .= '<span>'. $this->pages."</span><br>";
		$text .= '<span class="reader_id">reader id:</span>';
		$text .= '<span>'. $this->readerID."</span><br>";
		$text .= '<span class="author_id">author id:</span>';
        $text .= '<span>'.$this->authorID."</span><br>";
       	$text .= "<h3>Name of author: </h3>";
        $text .= '<div class="author_name">'.$this->authorDetails[0]. "</div>";
        $text .= "<h3>Name of readers: </h3>";
        $text .= '<div class="reader_name">'.$this->readerDetails[0]. "</div>";
        $text .= '</div>';
        
		return $text;		
	}
}?>