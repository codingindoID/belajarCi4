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
            $('input[name="type"]').val(response.type)
            $('input[name="qty"]').val(response.qty)
            $('input[name="harga"]').val(response.harga)
            $('#modal-edit').modal('show')
        }
    });
}