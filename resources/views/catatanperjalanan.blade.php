@extends('layout')
@section('judul', 'Travel Log')
@section('isi')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row purchace-popup">
        <div class="container">
            <div class="card mb-4">
                <div class="card-body">
                
                <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-2 mb-2">
                            <div class="col-md mt-3">
                              <div class="form-floating">
                                <input type="text" class="form-control" name="location" placeholder=" Add Your Location">     
                            @error('location')
                            <div class="text-warning">{{ $message }}</div>
                            @enderror
  
                                <label for="floatingInputGrid">Location</label>
                              </div>
  
                            </div>
                            <div class="col-md mt-3">
                              <div class="form-floating">
                                <div class="form-floating mb-4">
                                    <input type="text" class="form-control" name="temp" placeholder="Body Temp">
                                    
                                    @error('temp')
                                        <div class="text-warning">{{ $message }}</div>
                                    @enderror
          
                                    <label for="floatingInputGrid">Body Temp</label>
                                  </div>
                              </div>
                            </div>
                          </div>
                          
                  <div class="button-allnya float-start">
                  <button class="btn btn-warning btn-refresh fs-6"><i class="fa fa-refresh"></i> Refresh</button>
                <button type="submit" class="btn btn-primary"><i
                class="fas fa-plus"></i>Add</button>
                    </form>
                  </div>
                </div>
            </div>
            <div class="card mb-5">
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
                            <td>{{ $item->temp }}°C</td>
                          </tr>
                          @endforeach
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

@endpush