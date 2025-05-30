
$(document).ready(function()
    {
    
    $("#de").click(function()
    {
    $("#ed").dialog(
        { position:{my: "button", at: "center", of: window},
        height:"auto", width:500,padding:0,margin:0, show: { effect: 'slide', direction: "up" }
        , hide: { effect: 'slide', direction: "up" },modal:true, buttons: [
    //  {
    //      text: "Ok",
    //      icon:'ui-icon-calander',
    //      click: function() { $(this).dialog("close");  }
    //  }
    
]}).find("ui-dialog-title").hide();
}
)});

$(document).ready(function()
{
$("#Cancel").click(function(){
    $("#ed").dialog("close")
})
}
);


$(document).ready(function()
    {
    
    $("#edit").click(function()
    {
    $("#ed").dialog(
        { position:{my: "button", at: "center", of: window},
        height:"auto", width:500,padding:0,margin:0, show: { effect: 'slide', direction: "up" }
        , hide: { effect: 'slide', direction: "up" },modal:true, buttons: [
    
]}).find("ui-dialog-title").hide();
}
)});


$(document).ready(function()
{
$("#Cancel").click(function(){
    $("#ed").dialog("close")
})
}
);



$(document).ready(function()
    {
    
    $("#eyeslash").click(function()
    {
    $("#edd").dialog(
        { position:{my: "button", at: "center", of: window},
        height:"auto", width:450,padding:0,margin:0,/* title: "New Employee"*/show: { effect: 'slide', direction: "up" }
        , hide: { effect: 'slide', direction: "up" },modal:true, buttons: [
    
]});
}
)});

$(document).ready(function()
{
$("#Cancel").click(function(){
    $("#ed").dialog("close")
})
}
);

