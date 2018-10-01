<!-- Modal -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_edit">Ubah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="#" id="form_edit">

          <input type="hidden" name="id" >

          <div class="form-group">
            <div class="row align-items-center">
              <label class="col-sm-2">Nama:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row align-items-center">
              <label class="col-sm-2">Berat:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="berat" >
              </div>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btn_update">Update</button>
      </div>

        

    </div>
  </div>
</div>