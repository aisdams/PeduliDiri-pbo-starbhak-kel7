@extends('layout')
@section('judul', 'Travel Log')
@section('isi')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row purchace-popup">
        <div class="container text-center">
            <div class="card mb-4">
                <div class="card-body">
                  <div class="button-allnya float-start">
                  <button class="btn btn-warning btn-refresh fs-6"><i class="fa fa-refresh"></i> Refresh</button>
                <a href="" class="btn btn-primary"><i
                class="fas fa-plus"></i><span class="px-2">Add</span></a>
                <!-- <a href="" class="btn btn-danger mb-4"></i><i class="fa-solid fa-file-pdf"></i><span class="px-2">Export PDF</span></a> -->
                  </div>
                </div>
            </div>
            <div class="card">
                  <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead class="table-success">
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Location</th>
                            <th scope="col">Body Temperature</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($dataNote as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->created_at->isoFormat('MM/DD/YYYY'); }}</td>
                            <td>{{ $item->created_at->isoFormat('hh:mm:ss'); }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->temp }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('save-note') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Location</label>
                            <input type="text" class="form-control" name="location">
                            @error('location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Body Temperature</label>
                            <input type="text" class="form-control" name="temp">
                            @error('temp')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark">Add</button>
                    </form>
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

@endpush