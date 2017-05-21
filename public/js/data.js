
	$(document).ready(function(){
    $("#example").DataTable({
        "processing": true,
        "ajax": {
            "url": "edwardsdata.txt",
            // "type" : "GET",
            "dataSrc" : "domainObjects",
        "columns": [
        	{"data": "id", sDefaultContent: "n/a"},
        	{"data": "customId", sDefaultContent: "n/a"}
        	// {"data": "type"},
        	// {"data": "startTime"},
        	// {"data": "comment"},
        	// {"data": "loggerFileName"},
        	// {"data": "collectionMethod"},
        	// {"data": "medium"},
        	// {"data": "samplingLocation"}
        ]
      }
    });
});

for (var i=0; i< ParsedObject.length; i++) {
   var temp_item = ParsedObject[i]; 
   table.fnAddData(temp_item.id, temp_item.customId, temp_item.type, temp_item.startTime, temp_item.comment, temp_item.counter); //adds new row to datatable
}

// $.ajax({
//     url: "https://eaa.aqsamples.com/api/v1/activities?token=1a92ab93ad9d3bff85a645935fa92d0e",
//     type: "GET",
//     data: {
//         APPID: "1a92ab93ad9d3bff85a645935fa92d0e",
//         q:     "San Marcos, TX"
//     }
// });

// $.ajax("http://api.openweathermap.org/data/2.5/weather", {
//     data: {
//         APPID: "467fce2fbe4d967cacd8c8886374905a",
//         q:     "San Antonio, TX"
//     }
// });

// $.get("https://eaa.aqsamples.com/api/v1/activities?token=1a92ab93ad9d3bff85a645935fa92d0eq=San+Marcos,+TX");