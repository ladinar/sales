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

 $("#btn-View").click(function(){
      $("#modalView").modal({backdrop: true});

        var nik = $(this).val();
       
        $.get(url + '/' + nik, function (data) {
            //success data
            console.log(data);
            $('#nik').val(data.nik);
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#address').val(data.address);
            $('#btn-save').val("update");
            $('#modalView').modal('show');
        }) 
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

/*var step = 0;
  var stepItem = $('.step-progress .step-slider .step-slider-item');

  // Step Next
  $('.step-content .step-content-foot button[name="next"]').on('click', function() {
    var instance = $(this);
    if (stepItem.length - 1 < step) {
      return;
    }
    $(stepItem[step]).addClass('active');
    $('#' + stepItem[step + 1].dataset.id).removeClass('out');
    step++;
  });*/


var step = 0;
  var stepItem = $('.circle-container .dot');

  // Step Next
  $('button[name="next"]').on('click', function() {
    var instance = $(this);
    if (stepItem.length - 1 < step) {
      return;
    }
    $(stepItem[step]).addClass('active');
    $('#' + stepItem[step + 1].dataset.id).removeClass('out');
    step++;
  });

