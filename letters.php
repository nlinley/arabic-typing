<?php
  $lessonNumber = intval($_GET["lesson"]) or die("invalid");
  $lessonNumber--;
  $lessonLetters = array(
  	array("ش","ك"), #pinky home row
  	array("س","م"), #ring home row
  	array("ي","ن"), #middle home row
  	array("ب","ت"), #index home row
  	array("Review1",4),
  	array("ا","ل"), #index home row reach in
  	array("ى","ر"), #index bottom row
  	array("ف","غ"), #index up and in
  	array("ع","ق"), #index upper row
  	array("Review2",4),
  	array("Review3",9),
  	array("ث","ه"), #middle upper row
  	array("ص","خ"), #ring upper row
  	array("ض","ح"), #pinky upper row
  	array("ج","د"), #right pinky stretch  item#15
  	array("Review4",4),
   	array("ى","ر"), #lower row index
  	array("ة","ؤ"), #middle lower row
  	array("ء","و"), #ring lower row
  	array("ئ","ز"), #pinky lower
  	array("ظ","لا"), #other lower letters
  	array("Review5",4),
  	array("Review6",9),
  	array("Review7",18),
  	array("لأ","أ"), #shift inner index letters   item#25
  	array("لإ","إ"), #shift index upper
  	array("لآ","آ"),
        array("Review8",3),
  	array("Hardcoded","vowels1.inc"), #fattah, kasrah
  	array("Hardcoded","vowels2.inc"), #dammah, sukoon
  	array("Hardcoded","vowels3.inc"), #shaddah, kasrahtain
  	array("Hardcoded","vowels4.inc"), #fattahtain, dammahtain
  	array("Hardcoded","hadith1.inc"), #hadith1
  	array("Hardcoded","hadith2.inc"), #hadith3
  	array("Hardcoded","hadith3.inc"), #hadith5
  	array("Hardcoded","hadith4.inc"), #hadith7
  	array("Hardcoded","hadith5.inc") #hadith8
  		
  );
  
  $lesson = "";
  if ($lessonNumber >= 0 and $lessonNumber < count($lessonLetters)) {
  	//Check to see if number of lesson provided exists in the array (sanitize input)
  	
  	//Check to see if it is a 2 letter lesson or something else

  	$opOne = $lessonLetters[$lessonNumber][0];
	$lesson = "";
  	if (preg_match("/Review/", $opOne)) {
  		//create review lesson
  		//use previous n-1 type array entries for letters, ignore and don't count any Review or Hardcoded.
		$Letterarray = array();
		$iterations = $lessonLetters[$lessonNumber][1];
		for ($i = $lessonNumber - 1 ; $iterations > 0 and $i >= 0; $i--) {
			if (preg_match("/Review|Hard/",$lessonLetters[$i][0])) { $iterations++; } else {
				$Letterarray[count($Letterarray)] = $lessonLetters[$i][0];
				$Letterarray[count($Letterarray)] = $lessonLetters[$i][1];				
				$iterations--;
			}
		}
		//$lesson .= join($Letterarray);
		$numOfLetters = count($Letterarray);
		
		//start by creating a line of all letters repeated 2x each
		for ($i = $numOfLetters; $i >= 0; $i--) {
			$lesson .= str_repeat($Letterarray[$i],2);
		}
		
		for ($j = 0; $j < 3; $j++) {
			$lesson .= '<br />';
		
			//create random lines
			for ($i = 0; $i < 40; $i++) {
				$lesson .= $Letterarray[rand(0,$numOfLetters)];
				if ((($i+1) % 4) ==0 ) { $lesson .= " ";}
			}
		}

  	} elseif  (preg_match("/Hardcoded/",$opOne)) {
  		//read a hardcoded lesson file  
  		include ("/home4/nlinley/public_html/arabic-typing/" . $lessonLetters[$lessonNumber][1]);

  	
  		
  	} else {
  	 	//2 letter lesson auto generate
	  	
	  	
	  	$firstletter = $lessonLetters[$lessonNumber][0];
	  	$secondletter = $lessonLetters[$lessonNumber][1];
	  	
	        $firstline = str_repeat(str_repeat($firstletter . " ", 4) . str_repeat( $secondletter . " ", 4),2) . '<br />';
	  	$secondline = str_repeat(str_repeat($firstletter,4) . " " . str_repeat($secondletter, 4) . " ", 4) . '<br />';
	  	
	  	$thirdline = str_repeat(str_repeat($firstletter . $secondletter . " ",  3) . str_repeat($secondletter . $firstletter . " ",  3),2);
	  	$lesson = $firstline . $secondline . $thirdline . '<br />';
		
		$fourthline = "";
		$letterarray = array($firstletter, $secondletter, $firstletter, $secondletter, " ");
		for ($i = 0; $i < 60; $i++) {
			$fourthline .= $letterarray[rand(0,5)];
			
		}
		$lesson .= $fourthline;
	}  
	
	echo $lesson;
  }
  
?>