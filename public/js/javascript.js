// PENGECEKAN PREFIK YANG SAMA
function nomor(input_prefik, prefik_old, id_btn) {
  // MENGAMBIL NILAI/ VALUE DARI INPUT
  var value_prefik = $(input_prefik).val();
  var number = /^[0-9]+$/;

  // MENGAMBIL ID SMALL
  var parents_prefik = $(input_prefik).parents(".form-group").children("small");
  var prefik_message = $(parents_prefik).attr("id");

  if (value_prefik != "") {
    if (!value_prefik.match(number)) {
      $("#" + prefik_message).html("Prefik hanya boleh memasukan angka saja.");

      $('#'+id_btn).attr('disabled', 'true');
    } else {
      if (value_prefik != 0) {
        if (value_prefik == prefik_old) {
          $("#" + prefik_message).html("");
          $('#'+id_btn).removeAttr('disabled');
        } else {
          $.ajax({
            url: "validation_javasctipt_prefik",
            method: "POST",
            data: {
              nmr: value_prefik,
            },
            async: false,
            dataType: "json",
            success: function (data) {
              var html = "";
              var i;

              if (data[0] != null) {
                var data_prefik = data[0].prefik;
                var string_data = data_prefik.split(", ");

                for (i = 0; i < string_data.length; i++) {
                  if (string_data[i] == value_prefik) {
                    html +=
                      "Maaf nomer sudah ada! Silahkan masukan nomer yang lain.";
                        $('#'+id_btn).attr('disabled', 'true');
                  }
                }
              }

              if (html =="") {
                $('#'+id_btn).removeAttr('disabled');
              } 

              $("#" + prefik_message).html(html);
            },
          });
        }
      } else {
        $("#" + prefik_message).html("");
        $('#'+id_btn).removeAttr('disabled');
      }
    }
  } else {
    $("#" + prefik_message).html("");
    $('#'+id_btn).removeAttr('disabled');
  }
}

// MENAMPILKAN DATA OTOMATIS
function harga_group(elemen, kode, message) {
  var group = document.getElementById(elemen).value;
  var html = "";

  // MENAMBAHKAN ELEMENT
  html += '<div class="alert alert-danger" role="alert">'+
            '<h5>'+
              '<strong>'+
                '<svg width="2.0625em" height="2em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">'+
                  '<path fill-rule="evenodd" d="M7.938 2.016a.146.146 0 0 0-.054.057L1.027 13.74a.176.176 0 0 0-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 0 0 .066-.017.163.163 0 0 0 .055-.06.176.176 0 0 0-.003-.183L8.12 2.073a.146.146 0 0 0-.054-.057A.13.13 0 0 0 8.002 2a.13.13 0 0 0-.064.016zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />'+
                  '<path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />'+
                '</svg>'+
                'WARNING!!'+
              '</strong>'+
            '</h5>'+
            '<p id="message">Untuk mengisi form kode harus mengisi form group terlebih dahulu.</p>'+
          '</div>';

  if (group != "") {
    $.ajax({
      url: "validasi_harga_group_js",
      method: "POST",
      data: {
        group: group,
      },
      async: false,
      dataType: "json",
      success: function (data) {
        var html = "";

        var data_group = data.group;
        var data_product = data.product;

        if (data_group == 0) {
          // MENAMPILKAN SEMUA DATA PRODUCT
          html += '<option value="">Kode</option>';
          for (let i = 0; i < data_product.length; i++) {
            html +=
              '<option value="' +
              data_product[i].kode +
              '">' +
              data_product[i].kode +
              "</option>";
          }
          $("#" + kode).html(html);
        } else {
          // MENAMPILKAN BEBERAPA DATA PRODUCT
          html += '<option value="">Kode</option>';
          for (var dp = 0; dp < data_product.length; dp++) {
            var cek = 1;
            for (var dg = 0; dg < data_group.length; dg++) {
              if (data_product[dp].kode != data_group[dg].kode) {
                if (cek == data_group.length) {
                  html +=
                    '<option value="' +
                    data_product[dp].kode +
                    '">' +
                    data_product[dp].kode +
                    "</option>";
                }
                cek++;
              } else {
                cek = 0;
              }
            }
          }
          $("#" + kode).html(html);
        }
      },
    });
    document.getElementById(kode).removeAttribute("disabled");
    $("#" + message).html("");
  } else {
    document.getElementById(kode).setAttribute("disabled", true);
    $("#" + message).html(html);
  }
}

// PROSES PENGECEKAN INPUTAN
function hpp_gateway(elemen) {
  var number = /^[0-9]+$/;
  var value_number = $(elemen).val().replace(/[^0-9]/g, '');

  if (!$(elemen).val().match(value_number)) {
    swal({
        title: "DANGER!!",
        text: "Harap masukan angka saja.",
        icon: "error"
    });

    $(elemen).val(value_number);
  } else {
    if (!$(elemen).val().match(number)) {
      swal({
            title: "DANGER!!",
            text: "Harap masukan angka saja.",
            icon: "error"
        });

      $(elemen).val(value_number);
    }
  } 
}

// PENGECEKAN AGENID
function select_agenid(element) {
  $.ajax({
    url: '../Stockiest/select_info_stockiest',
    method: 'POST',
    data: {
        agenid: $(element).val()
    },
    dataType: 'JSON',
    success: function(data) {
      var html = "";

      if ($(element).val() != "") {
        if ((data == null) || (data == undefined)) {
          html = 'Agenid masih belum terdaftar';
        }

        if (html != "") {
          $('#btn_cek').attr('disabled', 'true');
        } else if (html == "") {
          $('#btn_cek').removeAttr('disabled');
        }
      } else if ($(element).val() == "") {
        $('#btn_cek').removeAttr('disabled');
      }

      $("#message").html(html)
    }
  })
}
// END