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

const dt = new DataTransfer();

$("#attachment").on('change', function(e){
	for(var i = 0; i < this.files.length; i++){
		let fileBloc = $('<span/>', {class: 'file-block'}),
			 fileName = $('<span/>', {class: 'name', text: this.files.item(i).name});
		fileBloc.append('<span class="file-delete"><span>+</span></span>')
			.append(fileName);
		$("#filesList > #files-names").append(fileBloc);
	};

	for (let file of this.files) {
		dt.items.add(file);
	}

	this.files = dt.files;

	$('span.file-delete').click(function(){
		let name = $(this).next('span.name').text();

		$(this).parent().remove();
		for(let i = 0; i < dt.items.length; i++){

			if(name === dt.items[i].getAsFile().name){

				dt.items.remove(i);
				continue;
			}
		}
        
		document.getElementById('attachment').files = dt.files;
	});
});