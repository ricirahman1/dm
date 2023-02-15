<link rel="stylesheet" href="/plugins/toastr/toastr.min.css" />
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css" />
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/app.css" />
<link rel="stylesheet" href="css/adminlte.min.css" />
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2"></div>
  </div>
</div>
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('part_add') }}" type="button" class="btn btn-primary ml-6"><i class="icon md-delete" aria-hidden="true"></i>Add Part</a>
        <div class="card-tools">
          <form>
            <div class="input-group input-group">
              <input type="text" class="form-control" name="q" placeholder="Search" />
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table" class="table table-sm table-bordered table-hover table-striped">
            <thead>
              <tr class="text-center">
                <th>No.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">fudrudr</td>

                <td class="text-center">
                  <a href="{{ route('part_edit') }}" class="btn btn-sm btn-icon btn-info btn-round" data-toggle="tooltip" data-original-title="View">
                    <i class="icon md-eye" aria-hidden="true"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div></div>
  </div>
  <div class="modal fade" id="delete-product">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="modal-title" class="modal-title">Delete Product</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" id="delete" action="" method="post">
            <input type="hidden" id="delete_id" name="id" />
          </form>
          <div>
            <p>Anda yakin ingin menghapus product code <span id="pcode" class="font-weight-bold"></span>?</p>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Batal') }}</button>
          <button id="button-save" type="button" class="btn btn-danger" onclick="document.getElementById('delete').submit();">{{ __('Ya, hapus') }}</button>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  function deleteProduct(data) {
    id = data;
    console.log(id);
    var url = '{{ route("part_delete", ":id") }}';
    url = url.replace(":id", id);
  }
</script>
<script src="/plugins/toastr/toastr.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
  toastr.success('{!! Session::get("success") !!}');
</script>
<script>
  toastr.error('{!! Session::get("error") !!}');
</script>
<script>
  toastr.error('{!! implode("", $errors->all("<li>:message</li>")) !!}');
</script>
