<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Surat Masuk</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
          font-family: Verdana, sans-serif;
           
            font-size:18px;
            
             color:#333;
        }
        .container3{
            font-size:46px;
            font-family:Georgia, serif;
        }
        .container2{
             line-height:20px;
              font-family:Georgia, serif;
              font-size:25px;
        }
        p{
            line-height:10px;
        }
        .container4{
            line-height:50px;
        }
       img{
           width: 800px;
           height: 170px;
         margin:-50px -50px
       }
       .container9{
        
         position:static;
         margin-left:450px;
         margin-top:-170px;
       }
    .container10{
        width: 800px;
           height: 80px;
       margin-top:98.5%;
       position:fixed;
    }
    .container11{
        width: auto;
        height:80px;
        margin:900px 55%;
        position:fixed;
    }
  .container12{
       position: fixed;
        top: 965px;
       right: -430%;

         
         font-size:18px;
         font-family:Book Antiqua;
         
  }
 .container20{
        position:static;
        margin-left:41px;
        margin-top:80px;
 }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('Gambar/Tugas.png')}}">

        
        
      <table style="margin:80px 40px">
     
            <tbody>
                <tr>
                       <td >Nomor</td>
                       <td>:</td>
                       <td>{{ $data->nosurat}}/{{ $data->nosuratmasuk}} </td>
                       </tr>
                      
                       <tr>
                           <td>Sifat</td>
                           <td>:</td>
                           <td>{{$data->sifat}}</td>     
                       </tr>
                  <tr >
                      <td>Perihal</td>
                      <td>:</td>
                      <td>{{$data->perihal}}</td>
                   </tr>      
            </tbody>
</table>
       <table  class="container9">
       <tbody>
        <tr>
                      <td >Blitar,</td>
                      <td>{{ $data->tanggalsurat}}</td>
                       </tr>
                       </tbody>
       </table>
       <table  class="container20">
        <tbody>
            <tr>
                <td>{!!$data->isi!!}</td>
            </tr>
        </tbody>
       </table>
     
       <img class="container10" src="{{asset('Gambar/Tugas1.png')}}" >
       <img class="container11" src="{{asset('Gambar/logo1__1_-removebg-preview.png')}}" >
    </div>
      
    <p class="container12"><b><u>Kurniawan Subiantoro.</u></b><br>
    <br>
Direktur Utama PT. Argia Academy
</p>
<img clas="container135" src="{{asset('Gambar/tanda-removebg-preview.png')}}" style="width:auto;height:50;margin:900px 56%;position:fixed">

</body>
</html>
