
	$("#example").ready(function(){
    $('#example').DataTable({
        "ajax": {
            "url": "https://eaa.aqsamples.com/api/v1/activities?token=1a92ab93ad9d3bff85a645935fa92d0e",
            "dataSrc": "",
            "type" : "GET"
        }
    });
});

