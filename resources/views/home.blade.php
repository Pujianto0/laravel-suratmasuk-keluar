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
        <li><a class="app-menu__item active " href="/home"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item " href="/suratmasuk"><i class="app-menu__icon fa fa-envelope-o" ></i><span class="app-menu__label">Surat Masuk</span></a></li>
        <li><a class="app-menu__item " href="/suratkeluar"><i class=" app-menu__icon fa fa-envelope-open-o" ></i><span class="app-menu__label">Surat Keluar</span></a></li>
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
      
      <!-- <div >
        <div class="row">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-envelope-o fa-003"></i>
            <div class="info">
              <h4>Jumlah Surat Masuk</h4>
              <p><b>{{$jumlahsuratmasuk}}</b></p>
            </div>
          </div>
        </div> -->
<div class="row">

<div class="col-md-6 col-lg-100">
    <div class=" shadow">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-envelope-o fa-003"></i>
        <div class="card-body">
            <div class="row ">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="/suratmasuk" style="text-decoration: none; color: inherit;">Jumlah Surat Masuk</a> </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlahsuratmasuk}}</div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 col-lg-100">
  
    <div class="shadow">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-paper-plane fa-3x"></i>
        <div class="card-body">
            <div class="row  ">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="/suratkeluar" style="text-decoration: none; color: inherit;">Jumlah Surat Keluar</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlahsuratkeluar}}</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
      </div>
    </main>
@endsection

