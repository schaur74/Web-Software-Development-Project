let stockPrice;

const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://apidojo-yahoo-finance-v1.p.rapidapi.com/market/v2/get-quotes?region=US&symbols=WD",
	"method": "GET",
	"headers": {
		"x-rapidapi-key": "87d8147fb2mshc14f3ddcfd99e29p16fb40jsn4b81dd637783",
		"x-rapidapi-host": "apidojo-yahoo-finance-v1.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (data) {
	console.log(data);
	let price =  document.getElementById("price");
	let divYield = document.getElementById("dividendYield");
	let ratio = document.getElementById("P/E_Ratio");
	let stockObj = data;
	price.innerHTML = stockObj.quoteResponse.result[0].ask;
	divYield.innerHTML = stockObj.quoteResponse.result[0].dividendYield + "%";
    ratio.innerHTML = stockObj.quoteResponse.result[0].forwardPE;
});

