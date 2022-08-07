function hapus_tugas(id_tugas) {
    var id_pelajaran = $('#id_pelajaran').val();
    var id_kelas = $('#id_kelas').val();
    Swal.fire({
        title: 'KONFIRMASI',
        html: 'Apakah anda yakin akan menghapus tugas ini ?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#969696',
        confirmButtonText: "Ya",
        cancelButtonText: "Batal",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: BASE_URL + "tugas/hapus_tugas/",
                data: { id_tugas: id_tugas },
                method: 'POST',
                cache: false,
                dataType: 'json',
                success: function (data) {
                    if (data.status == true) {
                        $('#tugas-' + id_tugas).fadeOut();
                        $('#parent_tugas').load(BASE_URL + 'tugas/tugas_sekolah/' + '/' + id_kelas + '/' + id_pelajaran + ' #reload_tugas');
                    } else {
                        Swal.fire({
                            title: data.title,
                            html: data.message,
                            icon: 'warning',
                            buttonsStyling: !1,
                            confirmButtonText: 'Ok',
                            customClass: { confirmButton: css_button }
                        });
                    }
                }
            })
        }
    })

}