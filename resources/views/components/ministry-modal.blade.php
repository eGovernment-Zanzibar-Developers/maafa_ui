<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ingiza Wizara</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="POST" id="ministry">
            @csrf
        <div class="modal-body">
          <div class="form-group">
              <label for="inputMinistry">Jina la Wizara</label>
              <input type="text" name="ministry" id="inputMinistry" class="form-control" placeholder="Jina la Wizara">
              @error('ministry')
                 <span class="text-danger">{{ $message }}</span> 
              @enderror
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" Id="submitForm">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <script>
    
        $('#submitForm').click(function(e){
            e.preventDefault();
            var form = $('#modal-default');
            var formData = new FormData($('#modal-default')[0]);
            $.ajax({
                type: "POST",
                url: "{{ route('ministry.ministry') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    showAllPosts();
                },
                error: function (error) {
                    console.log(error);
                    alert('error'+error);
                }
            })
        })
    })
</script>
 
