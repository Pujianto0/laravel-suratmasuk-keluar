@extends('layouts.admin')
@section('sidebar')
<style>
  a{
    text-decoration:none;
  }
</style>
<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('template/icon-347234_1280.png')}}" alt="User Image" width="70px">
        <div>
          <h6>Data Keseluruhan Surat</h6>
        </div>
      </div>
      <ul class="app-menu">
        <!-- <li><a class="app-menu__item active" href="{{asset('template/dashboard.html')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li> -->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{asset('template/bootstrap-components.html')}}"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="{{asset('template/https://fontawesome.com/v4.7.0/icons/')}}" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="{{asset('template/ui-cards.html')}}"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="{{asset('template/widgets.html')}}"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li> -->
        <!-- <li><a class="app-menu__item" href="{{asset('template/charts.html')}}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li> -->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Forms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{asset('template/form-components.html')}}"><i class="icon fa fa-circle-o"></i> Form Components</a></li>
            <li><a class="treeview-item" href="{{asset('template/form-custom.html')}}"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
            <li><a class="treeview-item" href="{{asset('template/form-samples.html')}}"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
            <li><a class="treeview-item" href="{{asset('template/form-notifications.html')}}"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
          </ul>
        </li> -->
         <li><a class="app-menu__item " href="/home" ><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="/suratmasuk"><i class="app-menu__icon fa fa-envelope-o"></i><span class="app-menu__label">Surat Masuk</span></a></li>
        <li><a class="app-menu__item active" href="/suratkeluar"><i class="app-menu__icon fa fa-envelope-open-o"></i><span class="app-menu__label">Surat Keluar</span></a></li>
          <!-- <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{asset('template/table-basic.html')}}"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
            <li><a class="treeview-item" href="{{asset('template/table-data-table.html')}}"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
          </ul> -->
        </li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Page</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{asset('template/blank-page.html')}}"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="{{asset('template/page-lockscreen.html')}}"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="{{asset('template/page-user.html')}}"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="{{asset('template/page-invoice.html')}}"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="{{asset('template/page-calendar.html')}}"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="{{asset('template/page-mailbox.html')}}"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="{{asset('template/page-error.html')}}"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li> -->
        <!-- <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li> -->
      </ul>
    </aside>
    @endsection
@section('content')
<main class="app-content">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <body>
    <h1 class="text-center mb-4" >Daftar Surat Keluar</h1>
    <div >
      <a href="/tambahsuratkeluar"class="btn btn-success">Tambah +</a><br>
      <br>
   
  </div>
</div>
</div>

<div  class="table-responsive">
        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif --}}
        <table id="example" class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">No Surat</th>
      <th scope="col">Tanggal Surat</th>
      <th scope="col">Tanggal Diterima</th>
      <th scope="col">No Surat Masuk</th>
      <th scope="col">perihal</th>
      <th scope="col">Sifat</th>
    
    <th scope="col">aksi</th>
      
    </tr>
  </thead>
  <tbody>
    @php
    $no=1;
    @endphp
    @foreach ($data as $index => $row)
    <tr>
      <th scope="row">{{ $index + $data->firstItem() }}</th>
      <td>{{ $row->nosurat }}</td>
      <td>{{ $row->tanggalsurat }}</td>
      <td>{{ $row->created_at->format('Y M d')}}</td>
       <td>{{ $row->nosuratmasuk }}</td>
      <td>{{ $row->perihal }}</td>
      <td>{{ $row->sifat }}</td>
      
      <td>

<div class="dropdown">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-fw fa-list"></i>
  </button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
<li><a  class="dropdown-item" href="/tampilkandata1/{{ $row->id }}" >Update</a></li>
<li> <a class="dropdown-item" href="#" data-id="{{$row->id}}" data-nosurat="{{ $row->nosurat }}">Hapus</a></li>
<li>  <a class="dropdown-item" href="/exportpdf12/{{$row->id}}">Export PDF</a></li>
    </ul>
</div>


     
     
      </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $data->links() }}
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script>
    $('.delete').click(function () {
        var suratkeluarid = $(this).attr('data-nosurat');
        var suratkeluarnosurat = $(this).attr('data-id');

        

        swal({
            title: "Yakin ?",
            text: "Kamu akan menghapus data surat masuk dengan No Surat " +suratkeluarid+ " ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/" +suratkeluarnosurat+ " "
                    swal("Data berhasil di hapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    });
</script>

<script>
    @if (Session:: has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif

</script>
      </div>
@endsection