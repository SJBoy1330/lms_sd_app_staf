$('#select_pelajaran').on('change', function () {
    var value = $(this).val();
    $.ajax({
        url: BASE_URL + "tugas/get_kelas/",
        data: { id_pelajaran: value },
        method: 'POST',
        cache: false,
        success: function (data) {
            $('#select_kelas').html(data);
        }
    })
});