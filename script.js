// const mySecret = process.env['ra'];
const mySecret = 'notused';
export function outputConsole(msg) {
	console.log("msg=");
	console.log(msg);
}

export function testCovidApi(idUpdate) {
	const options = {
		method: 'GET',
		headers: {
			'X-RapidAPI-Key': mySecret,
			'X-RapidAPI-Host': 'covid-19-coronavirus-statistics.p.rapidapi.com'
		}
	};

	fetch('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/total?country=Canada', options)
		.then(response => response.json())
		.then(response => {
			console.log(response);
			document.querySelector('#' + idUpdate).innerHTML = '<pre>' + JSON.stringify(response, null, "\t") + '</pre>'; //formatPreTab(response);
		})
		.catch(err => console.error(err));
}

export function testCovidApi2(country, idUpdate) {
	const options = {
		method: 'GET'
	};

	fetch('https://AlwaysRestPHP.rbyczko.repl.co/covid.php?country='+country, options)
		.then(response => response.json())
		.then(response => {
			console.log(response);
			document.querySelector('#' + idUpdate).innerHTML = 
				'<pre>' + JSON.stringify(JSON.parse(response),null,"\t")  + '</pre>';
		})
		.catch(err => console.error(err));
}


export function testClimateApi(idUpdate) {
	const options = {
		method: 'GET',
		headers: {
			'X-RapidAPI-Key': mySecret,
			'X-RapidAPI-Host': 'climate-change-live319.p.rapidapi.com'
		}
	};

	fetch('https://climate-change-live319.p.rapidapi.com/news/bbc?newspaperId=bbc', options)
		.then(response => response.json())
		.then(response => {
			console.log(response);
			document.querySelector(idUpdate).innerText("fromClimate");
		})
		.catch(err => console.error(err));

}

export function testEnvNewsLive(idUpdate) {
	const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': mySecret,
		'X-RapidAPI-Host': 'environment-news-live.p.rapidapi.com'
	}
};

fetch('https://environment-news-live.p.rapidapi.com/news/timesofindia', options)
	.then(response => response.json())
	.then(response => {
		console.log(response);
		document.querySelector('#' + idUpdate).innerHTML =
	'<pre>' + JSON.stringify(response, null, "\t") + '</pre>';
	})
	.catch(err => console.error(err));
}

function formatSpace0(response) {
	return JSON.stringify(response, null, 2);
}

function formatSpace1(response) {
	return "123456789A123456789B123456789C123456789D123456789E123456789F123456789G";
}

function formatSpace(response) {
	let output = '';
	response.forEach((val, index, arr) => {
		output = output + JSON.stringify(val, null, "<br />") + "<br />";
	});
	return output;
}

function formatPreTab(response) {
	let output = '<pre>';
	response.forEach((val, index, arr) => {
		output = output + JSON.stringify(val, null, "\t") + "<br />";
	});
	output += '</pre>';
	return output;
}


export function testSpaceApi(idUpdate) {
	const options = {
		method: 'GET',
		headers: {
			'X-RapidAPI-Key': mySecret,
			'X-RapidAPI-Host': 'space-news.p.rapidapi.com'
		}
	};

	fetch('https://space-news.p.rapidapi.com/news/guardian', options)
		.then(response => response.json())
		.then(response => {
			console.log(response);
			document.querySelector('#' + idUpdate).innerHTML = formatPreTab(response); // JSON.stringify(response, null, 2);
		})
		.catch(err => console.error(err));
}

export function testSpaceApi2(idUpdate) {
	const options = {
	method: 'GET'
	};


fetch('https://AlwaysRestPHP.rbyczko.repl.co/space.php', options)
	.then(response => response.json())
	.then(response => {
		console.log(response);
		document.querySelector('#' + idUpdate).innerHTML =
	'<pre>' + JSON.stringify(JSON.parse(response),null,"\t") + '</pre>';
	})
	.catch(err => console.error(err));
}


export function testWebcamIE(idUpdate) {
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': mySecret,
		'X-RapidAPI-Host': 'webcamstravel.p.rapidapi.com'
	}
};

fetch('https://webcamstravel.p.rapidapi.com/webcams/list/country=IE?show=webcams%3Aimage%2Clocation&lang=en', options)
	.then(response => response.json())
	.then(response => {
		console.log(response);
		document.querySelector('#' + idUpdate).innerHTML =
	'<pre>' + JSON.stringify(response, null, "\t") + '</pre>';
	})
	.catch(err => console.error(err));
}

export function testWebcamIE2(idUpdate) {
	const options = {
	method: 'GET'
	};


fetch('https://AlwaysRestPHP.rbyczko.repl.co/webcam.php', options)
	.then(response => response.json())
	.then(response => {
		console.log(response);
		document.querySelector('#' + idUpdate).innerHTML =
	'<pre>' + JSON.stringify(JSON.parse(response),null,"\t") + '</pre>';
	})
	.catch(err => console.error(err));
}

export function testYoutubeMeta(idUpdate) {
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': mySecret,
		'X-RapidAPI-Host': 'youtube-to-mp34.p.rapidapi.com'
	}
};

fetch('https://youtube-to-mp34.p.rapidapi.com/metadata/P0PBuWFeTY4', options)
	.then(response => response.json())
	.then(response => {
		console.log(response);
		document.querySelector('#' + idUpdate).innerHTML =
	'<pre>' + JSON.stringify(response, null, "\t") + '</pre>';
	})
	.catch(err => console.error(err));	
}
