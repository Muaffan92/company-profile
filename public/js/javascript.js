// PROSES PENGECEKAN INPUTAN
function number_value(elemen) {
  var number = /^[0-9]+$/;
  var value_number = $(elemen).val().replace(/[^0-9]/g, '');

  if (!$(elemen).val().match(value_number)) {
    swal({
        title: "DANGER!!",
        text: "Harap masukan angka saja.",
        icon: "error",
        button: false,
    });

    $(elemen).val(value_number);
  } else {
    if (!$(elemen).val().match(number)) {
      swal({
            title: "DANGER!!",
            text: "Harap masukan angka saja.",
            icon: "error",
            button: false,
        });

      $(elemen).val(value_number);
    }
  } 
}