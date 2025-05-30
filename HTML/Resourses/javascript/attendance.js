
$(document).ready(function()
    {
    
    $("#de").click(function()
    {
    $("#ed").dialog(
        { position:{my: "button", at: "center", of: window},
        height:"auto", width:800,padding:0,margin:0,/* title: "New Employee"*/show: { effect: 'slide', direction: "up" }
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

