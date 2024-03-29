@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Golongan</center></div>

                <div class="panel-body">
                    <table class="table" border='2'>
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Kode Golongan</th></center>
                                <th><center>Nama Golongan</th></center>
                                <th><center>Besaran Uang</th></center>
                                <th><center>Opsi</th></center>
                            </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach ($golongan as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td><center>{{$data->kode_golongan}}</td></center>
                            <td><center>{{$data->nama_golongan}}</td></center>
                            <td><center>{{$data->besaran_uang}}</td></center>
                            <td ><center>
                                    <a href="{{route('golongan.edit', $data->id)}}" class="btn btn-primary">Ubah</a>
                            </center></td>
                           <td >
                                  <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></a>
                                  @include('modals.delete', [
                                    'url' => route('golongan.destroy', $data->id),
                                    'model' => $data
                                  ])
                                </td>
                            
                             

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
