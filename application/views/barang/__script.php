
    <script>
      $(document).ready( function () {
        tampil_data();

        $('#datatable').DataTable();

        function tampil_data(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/barang/data_barang',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].nama+'</td>'+
                                    '<td>'+data[i].berat+'</td>'+
                                    '<td>'+
                                      '<button class="btn btn-primary btn-sm item_edit" data="'+data[i].id+'"><i class="fa fa-edit"></i></button>'+' '+
                                      '<button class="btn btn-danger btn-sm item_hapus" data="'+data[i].id+'"><i class="fa fa-remove"></i></button>'+
                                    '</td>'+
                                '</tr>';
                    }
                    $('#data_barang').html(html);
                }

            });
        }

        // reset FORM TAMBAH
        $(document).on('click', '#btn_tambah', function(event) {
          event.preventDefault();
          $('#form')[0].reset(); // reset form on modals
        });

        //GET UPDATE
        $('#data_barang').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/edit')?>/" + id,
                dataType : "JSON",
                success: function(data){
                  $('#modal_edit').modal('show');
                  $('[name="id"]').val(data.id);
                  $('[name="nama"]').val(data.nama);
                  $('[name="berat"]').val(data.berat);
                }
            });
            return false;
        });

        //Simpan Barang
        $('#btn_simpan').on('click',function(){
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/create')?>",
                dataType : "JSON",
                data: $('#form').serialize(),
                success: function(data){
                    $('#modal_add').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });

            //Update Barang
        $('#btn_update').on('click',function(){
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/update')?>" ,
                dataType : "JSON",
                data : $('#form_edit').serialize(),
                success: function(data){
                    $('#modal_edit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });



        //GET HAPUS
        $('#data_barang').on('click','.item_hapus',function(){
          if (confirm('Apa anda yakin ingin menghapus data ini')) {
            var id=$(this).attr('data');
            $.ajax({
              type : "POST",
              url  : "<?php echo base_url('index.php/barang/delete')?>/" + id,
              dataType : "JSON",
              success: function(data){
                tampil_data();
              }
            });
            return false;          
          }
        });

      } );    
    </script>