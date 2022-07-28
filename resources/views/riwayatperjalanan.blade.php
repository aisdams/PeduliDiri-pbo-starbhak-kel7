@extends('layout')
@section('judul', 'Riwayat Perjalanan')
@section('isi')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row purchace-popup">
        <div class="container text-center">
            <div class="card">
                <div class="card-body">
                  <div class="button-allnya float-start">
                  <button class="btn btn-warning btn-refresh mb-4"><i class="fa fa-refresh"></i> Refresh</button>
                <a href="" class="btn btn-primary mb-4"><i
                class="fas fa-plus"></i><span class="px-2">Tambah</span></a>
                <a href="" class="btn btn-danger mb-4"></i><i class="fa-solid fa-file-pdf"></i><span class="px-2">Export PDF</span></a>
                  </div>
                    <table class="table table-hover table-bordered">
                        <thead class="table-success">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Suhu Tubuh</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">Otto</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
      </div>
@endsection
@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.7.0/validator.min.js"
    integrity="sha512-rJU+PnS2bHzDCvRGFhXouCSxf4YYaUyUfjXMHsHFfMKhWDIEBr8go2LZ2EYXOqASey1tWc2qToeOCYh9et2aGQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {

        // btn refresh
        $('.btn-refresh').click(function (e) {
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })

    })
</script>

<script>
    $(function () {
        $('#barang-table').DataTable({
            columnDefs: [{
                paging: true,
                scrollX: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                targets: [1, 2, 3, 4],
            }, ],
        });

        $('button').click(function () {
            var data = table.$('input, select', 'button', 'form').serialize();
            return false;
        });
        table.columns().iterator('column', function (ctx, idx) {
            $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
        });
    });
</script>

<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@endpush