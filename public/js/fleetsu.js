$(document).ready(function(){

    //alert('TIME ZONE : ' + jstz.determine().name());
    
    /*$.get( "setTimeZone", { timeZone: jstz.determine().name() } , function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    }); */
    
    
    var htmlTags = '';
    $.get("/api/devices",{timeZone : jstz.determine().name()}, function(data, status){
        $.each(data, function(index, element) {            
            htmlTags = htmlTags + '<tr><td>' + element.device_id + '</td><td>' + element.device_label + '</td><td>' + element.last_reported + '</td><td>' + element.status + '</td></tr>';
        });
        $("tbody").html(htmlTags);
    });
});