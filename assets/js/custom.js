//Globale Variablen Startwere setzen
var allData = [];
$(document).ready(function () {
    $(".listItem").click(function () {
        getCatFromId($(this).attr("data-nr"));
    })
});//ready End
function getCatFromId(id) {
    $.post("db.php?flag=0", {
        id: id
    }, function (data, status) {
        allData = JSON.parse(data);
        console.log(allData);
        updateContent();
    });
    function updateContent() {
        $("#detailTitle").html(allData[0].rasse);
        
        $('.catImage').css({
            backgroundImage:"url('assets/images/"+allData[0].image+"')"
        });
        $('.catImage').text(allData[0].farbe);
        $('.catInfo').text(allData[0].info); 
        $('.catInfo').css({
            fontSize:'80%'
        });
        
            
        
        
    }
}