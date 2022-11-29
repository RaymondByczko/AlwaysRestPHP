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
			<div class="btn btn1" id="id_btn1">1-test</div>
			<div class="btn btn2" id="id_btn2">2-covid</div>
			<div class="btn btn3" id="id_btn3">3-climate</div>
			<div class="btn btn4" id="id_btn4">4-space</div>
			<div class="btn btn5" id="id_btn5">5-webcam-ie</div>
			<div class="btn btn6" id="id_btn6">6-youtube-meta</div>
		</div>
		<div class="grid-item item6" id="id_item6">Item6
		</div>
		<div class="grid-item item7">Item7
		</div>
	</div>
	<script type="module" defer>
            import {outputConsole, testCovidApi, testCovidApi2, testEnvNewsLive, testClimateApi, testSpaceApi, testSpaceApi2, testWebcamIE, testWebcamIE2, testYoutubeMeta} from './script.js';
            outputConsole('after import');
            function climate(){
								testEnvNewsLive('id_item6');
						}
						function space(){
                testSpaceApi2('id_item6');
            }
					  function covid(){
								testCovidApi2('id_item6');
						}
						function webcam(){
							testWebcamIE2('id_item6');
						}
						function youtube(){
							testYoutubeMeta('id_item6');
						}
            document.querySelector('#id_btn1').addEventListener("click", ()=>{outputConsole("btn1 called")});
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