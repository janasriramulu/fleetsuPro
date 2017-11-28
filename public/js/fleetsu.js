$(document).ready(function(){
    var htmlTags = '';
    $.get("/api/devices", function(data, status){
        $.each(data, function(index, element) {            
            htmlTags = htmlTags + '<tr><td>' + element.device_id + '</td><td>' + element.device_label + '</td><td>' + element.last_reported + '</td><td>' + element.status + '</td></tr>';
        });
        $("tbody").html(htmlTags);
    });

    
});