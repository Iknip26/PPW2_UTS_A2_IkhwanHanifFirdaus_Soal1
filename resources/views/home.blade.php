@extends('layouts')
@section('isi')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id_pemain</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor punggung</th>
        <th scope="col">Posisi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data_pemain as $data){
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->Nama_pemain}}</td>
                <td>{{$data->No_punggung}}</td>
                <td>{{$data->Posisi}}</td>
            </tr>
        }
        @endforeach
    </tbody>
  </table>
@endsection