$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#judulModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#judulModalLabel').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id}, // id kiri nama data yang ingin diisikan, yg kanan isinya.
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});