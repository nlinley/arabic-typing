<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Free Online Arabic Typing Tutor</title>
<meta name='author' content='Nathan Linley' />
<meta name="description" content="Basic Arabic Typing Tutor program.  Free online, web based lesson system."/>
<meta content="index,follow" name="robots" />
<meta content="http://www.makinghijrah.com/makinghijrah.png" property="og:image" />
<meta content="Free online arabic typing tutorial" property="og:description" />
<meta property="fb:admins" content="1474641820" />

<script async type="text/javascript" src="//www.makinghijrah.com/GAn.js"></script>
<script async type="text/javascript" src="https://apis.google.com/js/platform.js" defer></script>
<script language="javascript">
	shiftpressed = false;

	function loadlesson() {
		var client = new XMLHttpRequest();
                client.open('GET','/arabic-typing/letters.php?lesson=' + document.getElementById("LessonSelector").value);
		client.responseType = 'text';
		client.onload = function() {
			if (client.readyState === client.DONE) {
				var lessonText = client.responseText.toString();
				document.getElementById("Lesson-TextArea").innerHTML = lessonText;
				document.getElementById("typing-box").value = "";
				document.getElementById("Char-numtyped").value = 0;
				document.getElementById("Char-numTotal").value = lessonText.length;
				console.log(client.responseText);
			}
		}
		client.send();
		
		
	}
	
	function evalTyping(e) {
		var key = event.keyCode || event.charCode;
		curCount = document.getElementById("Char-numtyped").value;

		if (key == 16 && !shiftpressed) {
			shiftpressed = true;
			//change image of keyboard
			document.getElementById("keyboard").style.zIndex = -2;

		} 
		if (key == 8){
			//backspace pressed
			if (curCount > 0) {document.getElementById("Char-numtyped").value = --curCount; }
		} else if ((key >= 37 && key <= 40) || key == 9 || key ==46 || (key >= 33 && key <= 36) || key == 45) {
			//block arrow keys, tab, del, movement keys and insert
			return false;
		
		} else if ((key >= 112 && key <= 123) ||key == 17 || key == 18 || key == 91) {
		    //ignore F keys, ctrl, alt, win
		} else if (key != 16) {
			document.getElementById("Char-numtyped").value = ++curCount;
		}
	}
	
	function checkshift(e) {

		if (!e.shiftKey) {
			//change image of keyboard back to standard
			shiftpressed = false;
			document.getElementById("keyboard").style.zIndex = 0;
			return;
		}
	}
	
	document.onkeydown=evalTyping;
	document.onkeyup=checkshift;
	

</script>

</head>

<body>


<style>

.lateef{font-family: 'Lateef', serif;}
.ArabicText {
	 font-family: Lateef;
	 font-size:x-large; 
	 font-weight: bolder;
	 }
}

</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1650190218566080";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" style="float:left; left:550px;" data-href="http://www.makinghijrah.com/arabic-typing/index.php?fb=1" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.makinghijrah.com%2Farabic-typing%2Findex.php%3Ffb%3D1&amp;src=sdkpreparse" >Share</a></div>

<h3>Arabic typing tutorial by <a href="http://www.makinghijrah.com">MakingHijrah.com</a></h3><br />

<select id="LessonSelector" style="width: 270px; margin-left: 200px; margin-bottom:13px;" onchange="loadlesson()">
	<option value="">Select Lesson</option>
	<option value="1">Lesson 1 - ش ك</option>
	<option value="2">Lesson 2 - م س</option>
	<option value="3">Lesson 3 - ي ن</option>
	<option value="4">Lesson 4 - ت ب</option>
	<option value="5">Lesson 5 - review</option>	
	<option value="6">Lesson 6 - ل ا</option>
	<option value="7">Lesson 7 - ى ر</option>
	<option value="8">Lesson 8 - ف غ</option>
	<option value="9">Lesson 9 - ع ق</option>
	<option value="10">Lesson 10 - review</option>	
	<option value="11">Lesson 11 - full review</option>		
	<option value="12">Lesson 12 - ث ه</option>			
	<option value="13">Lesson 13 - ص خ</option>			
	<option value="14">Lesson 14 - ض ح</option>			
	<option value="15">Lesson 15 - ج د</option>
	<option value="16">Lesson 16 - review</option>	
	<option value="17">Lesson 17 - ى ر</option>			
	<option value="18">Lesson 18 - ة ؤ</option>			
	<option value="19">Lesson 19 - ء و</option>			
	<option value="20">Lesson 20 - ئ ز</option>	
	<option value="21">Lesson 21 - لا ظ</option>
	<option value="22">Lesson 22 - review</option>
	<option value="23">Lesson 23 - review last half</option>
	<option value="24">Lesson 24 - full review</option>	
	<option value="25">Lesson 25 - لأ أ</option>
	<option value="26">Lesson 26 - لإ إ</option>
	<option value="27">Lesson 27 - لآ آ</option>
        <option value="28">Lesson 28 - review</option>
	<option value="29">Lesson 29 - vowels - fattah/kasrah</option>
	<option value="30">Lesson 30 - vowels - Dammah/sukoon</option>
	<option value="31">Lesson 31 - vowels - shaddah/kasrahtain</option>
	<option value="32">Lesson 32 - vowels - fattahtain/dammahtain</option>
	<option value="33">Hadith 1 Nawawi</option>
	<option value="34">Hadith 3 Nawawi</option>
	<option value="35">Hadith 5 Nawawi</option>
	<option value="36">Hadith 7 Nawawi</option>
	<option value="37">Hadith 8 Nawawi</option>
</select>
<div id="rightpane" style="position: absolute; width: 300px; height:600px; left: 750px; top: 100px">
Typed: <textarea id="Char-numtyped" cols="3" rows="1" readonly="readonly" style="border-style: none; resize:none; position: relative; top: 5px;" >0</textarea>
<br />Total Characters: <textarea id="Char-numTotal" cols="3" rows="1" readonly="readonly" style="border-style: none; resize:none; position: relative; top: 5px;" >0</textarea>
<br />
  <br />
  <u>Instructions:</u>
  <ul>
	<li>Ensure you have an arabic keyboard layout configured on your machine.</li>
	<li>Select a lesson from the pull down menu. </li>
	<li>Type over the arabic letters displayed in the lesson.</li>
  </ul>
</div>

<div id="Lesson-box" style="width: 750px;">
	<div id="Lesson-TextArea" dir="RTL" class="ArabicText" style="position: fixed; background-color: #CCFFCC; border-style: solid; border-width: 10px; border-color: #CCFFCC; margin: 10px;  letter-spacing: 1px;  width: 685px; text-align:right; height: 190px; color: rgba(0, 0, 0, 0.4); word-wrap: break-word; ">
		
	</div>
	<div id="Lesson-input" style="z-index: 1; position: fixed; margin-left: 8px; margin-top: 6px;">
	   <textarea id="typing-box" dir="RTL" class="ArabicText" cols="45" rows="7" style="width: 685px; margin: 10px; text-align:right; overflow:auto; background-color: transparent; letter-spacing: 1px; word-wrap: break-word; border: none; outline: none; " type="text"></textarea>

		
	</div>
</div>
<div id="kbddiv" style="position: fixed; top: 330px; width:700px; height:300px">
	<img id="keyboard" alt="arabic keyboard" src="arabic-white-1.png" style="z-index:0; position:absolute; top:15px; left:30px;"    />
	<img src="arabic-white-shift.png" style="z-index:-1; position:absolute; top:15px; left:30px;" />
</div>


</body>

</html>
