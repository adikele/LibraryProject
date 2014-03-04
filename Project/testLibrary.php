<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Choose books from library </title>

<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php

function __autoload($class)
{
	require_once("Library/$class.php");
}

?>


<?php 

$a1 = new Author("AGhosh", true, 1960, "indian", true, 1);
$a2 = new Author("Abbas", true, 1960, "pakistan", true, 2);
$a3 = new Author("Ruskin Bond", true, 1960, "indian", true, 3);
$arrayAuthors = array($a1, $a2, $a3);

$r1 = new Reader("Smita", false, 1979, "engineer", 1);
$r2 = new Reader("Noor", false, 1979, "doctor", 2);
$arrayReaders = array($r1, $r2);

$b1 = new Book("Hungry Tide", "fiction",	400,	1, 1);
$b2 = new Book("Nakhalistan Ki Talash", "fiction",	400,	2, 2);
$b3 = new Book("Room on the Roof", "adventure",	400,	1, 3);
$arrayBooks = array($b1, $b2, $b3);



$c = "none";

if(isset($_POST['submitGenre']))

{
	echo ("<h1> List of books </h1>");
	echo ("<h2>(for the genre selected):</h2>");
	include_once("Library/form.php");
	
 $c = $_POST['genre'];
	  	    	if($c != "fiction" && $c != "adventure"){
			// case below is true if none of the available genres are entered
			 echo ("Entered genre is not available!");
		}else {
			// the case below is true if the given genre is one of the available genres:	

			// This loop fills the readerDetails array of Book object with details from Reader object
         foreach($arrayBooks as $arrayMember){
	        $x = $arrayMember->getReaderID();	
           //Let be x be the readerID of an individual arrayMember  
       
          $arrayMember->addReader($arrayReaders[$x-1]);  
          //pass to this individual arrayMember the entire Reader object with subscript x-1 from the arrayReaders array
          //eg. if the ReaderID is 1, the Reader Object with subscript 0 is passed
         }
      
    
           // This loop fills the authorDetails array of Book object with details from Reader object
       foreach($arrayBooks as $arrayMember){
	$x = $arrayMember->getAuthorID();	
       //Let be x be the readerID of an individual arrayMember
       
      $arrayMember->addAuthor($arrayAuthors[$x-1]);  
      //pass to this individual arrayMember the entire Author object with subscript x from the arrayAuthors array
        }
        
             // This loop fills the readerDetails array of Book object with details from Reader object
			foreach($arrayBooks as $arrayMember){
       if  ($arrayMember->getGenre() == $c)	
       //for each book (Object) from $arrayBooks that has the same genre as the selected one 
       
    echo("<p>$arrayMember</p>");
   // print details of that book (Object)
   echo("<br />");
   echo("<br />");
			}
		}  
		
} else {
	
	echo("<h3>Welcome to library</h3>");
	include_once("Library/form.php");
}
?>
 

