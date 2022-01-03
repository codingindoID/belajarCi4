$(document).ready(function () {
    //datatable
    $('#example1').DataTable();
});

//vanila
var base = $('#base_url').data('id')

function editFormBarang(id) {
    $('input[name="id-barang"]').val(id)
    $.ajax({
        type: "get",
        url: base + "/home/getDataBarang/" + id,
        dataType: "json",
        success: function (response) {
            $('input[name="nama"]').val(response.nama)
            $('select[name="kategori"]').val(response.katgori).change()
            $('input[name="qty"]').val(response.qty)
            $('input[name="harga"]').val(response.harga)
            $('#modal-edit').modal('show')
        }
    });
}