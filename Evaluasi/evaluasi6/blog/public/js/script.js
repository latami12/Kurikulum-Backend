$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#judulModalLabel').html('Tambah');
        $('.modal-footer button[type=submit]').html('Tambah');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#judulModalLabel').html('Edit');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/Kurikulum-Backend/Evaluasi/evaluasi6/blog/public/artikel/ubah');

        const id = $(this).data('id'); 
        console.log(id);
        $.ajax({
            url: 'http://localhost/Kurikulum-Backend/Evaluasi/evaluasi6/blog/public/artikel/getubah',
            data: {id : id}, // id kiri nama data yang ingin diisikan, yg kanan isinya.
            method: 'POST',
            dataType: 'json',
            success: function(data){
                // console.log(data);
                $('#judul').val(data.judul);
                $('#artikel').val(data.artikel);
                $('#kategori').val(data.kategori);
                $('#imghide').val(data.img);
                $('#id').val(data.id);
            }
        });
    });
});