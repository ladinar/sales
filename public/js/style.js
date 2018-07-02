function myFunction() {
    $("#myModal").modal();
}

  $("#btnAdd").click(function(){
        $("#modalAdd").modal({backdrop: true});
    });

  $("#modalabsen").click(function(){
        $("#modalAttendee").modal({backdrop: true});
    });
  $("#btn-asign").click(function(){
        $("#modalAsign").modal({backdrop: true});
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

$("#btn-result").click(function(){
        $("#ModalResult").modal({backdrop: true});
    });

$("#btn-View").click(function(){
        $("#modalView").modal({backdrop: true});
    });


var slider = new Slider("#ex6");

$("#ex6-enabled").click(function() {
  if(this.checked) {
    // With JQuery
    $("#ex6").slider("enable");

    // Without JQuery
    slider.enable();
  }
  else {
    // With JQuery
    $("#ex6").slider("disable");

    // Without JQuery
    slider.disable();
  }
});

var slider = new Slider("#ex7");
slider.on("slide", function(sliderValue) {
  document.getElementById("ex7SliderVal").textContent = sliderValue;
});

$("#ex7-enabled").click(function() {
  if(this.checked) {
    // With JQuery
    $("#ex7").slider("enable");

    // Without JQuery
    slider.enable();
  }
  else {
    // With JQuery
    $("#ex7").slider("disable");

    // Without JQuery
    slider.disable();
  }
});