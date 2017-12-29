$(document).ready(function(){
    $.get("/api/devices",{timeZone : jstz.determine().name()}, function(data, status){
        $("#template").tmpl(data).appendTo("#tableBody");
    });
});