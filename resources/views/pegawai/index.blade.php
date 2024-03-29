  

                @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Pegawai</center></div>

                <div class="panel-body">
                     <table class="table" border='2'>
                    <thead>
                <tr>
                    <th><center>No.</center></th>
                    <th><center>Nip</center></th>
                    <th><center>Pengguna</center></th>
                    <th><center>Email</center></th>
                    <th><center>Golongan</center></th>
                    <th><center>Jabatan</center></th>
                    <th><center>Foto</center></th>
                    <th><center>Opsi</center></th>

                </tr>
                </thead>
                @php
                $no=1;
                @endphp
                @foreach($pegawai as $data)
                    <tbody>
                        <tr>
                            <td><center>{{$no++}}</center></td>
                            <td><center>{{$data->nip}}</center></td>                                   
                            <td><center>{{$data->User->name}}</center></td>
                            <td><center>{{$data->User->email}}</center></td>
                            <td><center>{{$data->golongan->nama_golongan}}</center></td>
                            <td><center>{{$data->jabatan->nama_jabatan}}</center></td>
                            <td><center><img src="/assets/image/{{ $data->foto }}" width="50px" height="50px"></center></td>
                            <td><center>
                                <a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                        </tr>

                    </tbody>
                    @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
