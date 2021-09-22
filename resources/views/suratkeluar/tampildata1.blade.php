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
  
<body>
    <h1 class="text-center mb-4" >Edit Daftar Surat Keluar</h1>
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="container">
      <div  class="row justify-content-center">
        <div class="col-8">
       <div class="card">
         <div class="card-body">
           <form action="/updatedata1/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="mb-3">
   
    <name="nosurat" value="{{$data->nosurat}}">
  </div>
  <div class="mb-3">
   
    <name="nosuratmasuk" value="{{$data->nosuratmasuk}}">
  </div>

  <div class="mb-3">
    <label for="tanggalsurat" class="form-label">Tanggal Surat</label>
    <input type="date" name="tanggalsurat" class="form-control" value="{{ $data->tanggalsurat}}">
  </div>
  <div class="mb-3">
                      <label for="sifat">Sifat Surat</label>
                      <select name="sifat" id="sifat" name="sifat" class="form-control">
                        <option selected>{{$data->sifat}}</option>
                        <option value="Surat Dinas">Surat Dinas</option>
                        <option value="Surat Pribadi">Surat Pribadi</option>
                        <option value="Surat Niaga">Surat Niaga</option>
                        <option value="Surat Sosial">Surat Sosial</option>
                        <option value="Surat Pengantar">Surat Pengantar</option>
                      </select>
                    </div>
 <div class="mb-3">
    <label for="perihal" class="form-label">Perihal</label>
    <input type="text" name="perihal" class="form-control "value="{{$data->perihal}}">
  </div>
        <div class="mb-3">
     <label>Isi Surat:</label><br>
<textarea style="width:600px; height:450px" id="summernote" id="isi" name="isi"><?php echo $data['isi'] ?></textarea>
  
  </div>          
  <button type="submit" class="btn btn-primary center">Submit</button>
  </form>
         </div>
       </div>
       </div>
      </div>
    </div>
  @section('scripts')
  <script>
      $('#summernote').summernote({
        placeholder: 'Isi Surat',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
  @endsection
  </body>
  @endsection