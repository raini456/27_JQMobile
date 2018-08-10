
$(document).ready(function(){    
   
    console.log("READY !!!");
    // Globale Variablen Startwere setzen
  $(".listItem").click(function(){
      //alert( $(this).attr("data-nr") );      
      getClubFromId( $(this).attr("data-nr") );
  })
    
});//ready End
var allData = [];
function getClubFromId(id){
    $.post("db.php?flag=0",{id:id},function(data,status){
        allData = JSON.parse(data);
        console.log(allData);
        updateContent()
    });
}

function updateContent(){
    $("#detailTitle").html(allData[0].name);
   

$("#detailContent").html("");	
$("#detailContent").append("<a href=\"#popupParis\" data-rel=\"popup\" data-position-to=\"window\" data-transition=\"fade\"><img class=\"popphoto\" src=\"assets/images/"+allData[0].img+"\" alt=\"Paris, France\" style=\"width:30%\"></a>").enhanceWithin();
$("#detailContent").append("<div data-role=\"popup\" id=\"popupParis\" data-overlay-theme=\"b\" data-theme=\"b\" data-corners=\"false\"><a href=\"#\" data-rel=\"back\" class=\"ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right\">Close</a><img class=\"popphoto\" src=\"assets/images/"+allData[0].img+"\" style=\"max-height:512px;\" alt=\"Paris, France\"></div>").enhanceWithin();

}