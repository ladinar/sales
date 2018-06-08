function myFunction() {
    $("#myModal").modal();
}

 $("#modalAdd").click(function(){
        $("#ModalAdd").modal({backdrop: true});
    });
  $("#modalabsen").click(function(){
        $("#ModalAttendee").modal({backdrop: true});
    });

$("#myform").tooltip({
 
      // place tooltip on the right edge
      position: "center right",
 
      // a little tweaking of the position
      offset: [-2, 10],
 
      // use the built-in fadeIn/fadeOut effect
      effect: "fade",
 
      // custom opacity setting
      opacity: 0.7
 
      });