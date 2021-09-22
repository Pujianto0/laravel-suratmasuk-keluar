<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<h2>Data Surat Masuk</h2>
<table id="customers">
  <tr>
      <th>#</th>
      <th>No Surat</th>
      <th>Tanggal Surat</th>
      <th>Tanggal Diterima</th>
      <th>perihal</th>
      <th>Sifat</th>
      <th>Lampiran</th>
      <th>Kode Instansi</th>
  </tr>
  @php
  $no=1;
  @endphp
  
  @foreach($data as $row)
<tr>
      <td>{{$no++}}</td>
      <td>{{ $row->nosurat }}</td>
      <td>{{ $row->tanggalsurat }}</td>

      <td>{{ $row->created_at->format('Y M d')}}</td>
      <td>{{ $row->perihal }}</td>
      <td>{{ $row->sifat }}</td>
      <td>{{ $row->lampiran }}</td>
      <td>{{ $row->kodeinstansi }}</td>
      
      </td>
      </tr>
  @endforeach    
</table>

</body>
</html>
