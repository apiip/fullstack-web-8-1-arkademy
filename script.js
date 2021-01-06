$(function() {
  
    $('.pesan').on('click', function() {

        const id = $(this).data('id');
        if (id > 0 ) {
            $("#isiMod").removeClass("alert alert-danger");
            $("#isiMod").addClass("alert alert-success");
            $('#isiMod').html('Pesanan Anda Sedang Diproses');
        } else {
            $("#isiMod").removeClass("alert alert-success");
            $("#isiMod").addClass("alert alert-danger");
            $('#isiMod').html('Maaf Stok Habis');
        }
    });

});