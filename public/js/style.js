function myFunction() {
    $("#myModal").modal();
}

  $("#modalAdd").click(function(){
        $("#ModalAdd").modal({backdrop: true});
    });
  $("#modalabsen").click(function(){
        $("#ModalAttendee").modal({backdrop: true});
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

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();

