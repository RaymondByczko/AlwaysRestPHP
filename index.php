<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>RapidAPI</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="grid-container">
		<div class="grid-item item1">Item1
		</div>
		<div class="grid-item item2">Item2
		</div>
		<div class="grid-item item3">Item3
		</div>
		<div class="grid-item item4">Item4
		</div>
		<div class="grid-item item5 grid-container-btns">
			<div class="btn btn1" id="id_btn1">1-burger</div>
			<div class="btn btn2" id="id_btn2">2-covid</div>
			<div class="btn btn3" id="id_btn3">3-climate</div>
			<div class="btn btn4" id="id_btn4">4-space</div>
			<div class="btn btn5" id="id_btn5">5-webcam-ie</div>
			<div class="btn btn6" id="id_btn6">6-youtube-meta</div>
		</div>
		<div class="grid-item item6" id="id_item6">Item6
		</div>
		<div class="grid-item item7">
			
			<label for="covid_country">Enter 2-covid:</label>
			<select name="covid_country" id="id_covid_country">
				<option value="Canada">Canada</option>
				<option value="Japan">Japan</option>
				<option value="US">US</option>
				<option value="Ireland">Ireland</option>
				<option value="Scotland">Scotland</option>
				<option value="Global">Global</option>
			</select>
			<label for="space_news_src">Enter 4-space:</label>
			<select name="space_news_src" id="id_space_news_src">
				<option value="telegraph">Telegraph</option>
				<option value="guardian">The Guardian</option>
				<option value="sun">The Sun</option>
				<option value ="all">All sources</option>
			</select>
			<label for="youtube">Enter 6-youtube-meta:</label>
			<select name="youtube" id="id_youtube">
				<option value="zj9DWwznF1Q">Second Thought-Student Debt</option>
				<option value="QWRRnzqRxY8">Democracy at Work-Unemployment</option>
				
			</select>
		</div>
		<div class="grid-item item8" id="id_item8">Item8
		</div>
	</div>
	<script type="module" defer>
            import {outputConsole, testBurger, testCovidApi, testCovidApi2, testEnvNewsLive, testClimateApi, testSpaceApi, testSpaceApi2, testWebcamIE, testWebcamIE2, testYoutubeMeta, testYoutubeMeta2} from './script.js';
            outputConsole('after import');
						function burger(){
							testBurger('id_item6');
						}
            function climate(){
								testEnvNewsLive('id_item6');
						}
						function space(){
							  let newsSource = document.querySelector('#id_space_news_src').value;
								console.log("space-newsSource=" + newsSource);
                testSpaceApi2(newsSource,'id_item6');
            }
					  function covid(){
								let country = document.querySelector('#id_covid_country').value;
								console.log('country='+country);
								testCovidApi2(country, 'id_item6');
						}
						function webcam(){
							testWebcamIE2('id_item6');
						}
						function youtube(){
							let idYoutube = document.querySelector('#id_youtube').value;
							testYoutubeMeta2(idYoutube,'id_item6');
						}
            document.querySelector('#id_btn1').addEventListener("click", ()=>{burger();});
            document.querySelector('#id_btn2').addEventListener("click", ()=>{covid();});
            document.querySelector('#id_btn3').addEventListener("click", ()=>{climate('id_item6');});
            document.querySelector('#id_btn4').addEventListener("click", ()=>{space();});
		document.querySelector('#id_btn5').addEventListener("click", ()=>{webcam();});
		document.querySelector('#id_btn6').addEventListener("click", ()=>{youtube();});
	</script>

	<!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
	<script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>

</html>