function lain() {
    $("#showhideText").toggle(this.checked);
};



function hapus_jurnal_staf(id_jurnal) {
    $.ajax({
        url: BASE_URL + 'func_jurnal/hapus_jurnal_staf',
        data: { id_jurnal: id_jurnal },
        method: 'POST',
        cache: false,
        dataType: 'json',
        beforeSend() {
            $('.button_hapus').prop('disabled', true);
            $('#loading_scene').modal('show');
        },
        success: function (data) {
            $('.button_hapus').prop('disabled', false);
            $('#loading_scene').modal('hide');
            $('#refresh_loading').load(BASE_URL + 'notifikasi/ #loading_scene');
            $('.modal-backdrop').remove();
            if (data.status == 200 || data.status == true) {
                var icon = 'success';
            } else {
                var icon = 'warning';
            }

            Swal.fire({
                title: data.alert.title,
                text: data.alert.message,
                icon: icon,
                buttonsStyling: !1,
                confirmButtonText: "Ok",
                customClass: {
                    confirmButton: css_button
                }
            }).then(function () {
                var cek = $('.card_jurnal_staf').length;
                if (cek > 1) {
                    $('#card-jurnal-' + id_jurnal).remove();
                } else {
                    $('#parent_jurnal_staf').load(BASE_URL + 'jurnal/jurnal_staf/ #reload_jurnal_staf');
                }
                $('#parent_modaling').load(BASE_URL + 'jurnal/jurnal_staf/ #reload_modaling');
            });
        }
    });
}


function reset_tanggal() {

    $('#select_tahun').val(tahun);
    $('#select_bulan').val(bulan);
}


function change_tanggal(element) {
    var tanggal = element.value;
    $.ajax({
        url: BASE_URL + 'func_jurnal/get_detail_by_tanggal',
        data: { tanggal: tanggal },
        method: 'POST',
        cache: false,
        beforeSend() {
            $('#body_from_tambah').html(html_loader);
            $('#button_submit_jurnal').prop('disabled', true);
        },
        success: function (msg) {
            $('#button_submit_jurnal').prop('disabled', false);
            $('#body_from_tambah').html(msg);
        }
    })
}


function modal_edit(id_jurnal) {
    $.ajax({
        url: BASE_URL + 'func_jurnal/get_detail',
        data: { id_jurnal: id_jurnal },
        method: 'POST',
        cache: false,
        beforeSend() {
            $('#body_from_edit').html(html_loader);
            $('#button_edit_jurnal').prop('disabled', true);
        },
        success: function (msg) {
            $('#button_edit_jurnal').prop('disabled', false);
            $('#body_from_edit').html(msg);
        }
    })
}