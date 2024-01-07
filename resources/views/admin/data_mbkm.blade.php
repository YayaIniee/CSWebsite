@extends('layout.admin')

@section('content')
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data MBKM Mahasiswa</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data MBKM</h4>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate">Tambah
                            Data</button>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID MBKM</th>
                                        <th>Mahasiswa</th>
                                        <th>Nama MBKM</th>
                                        <th>Tipe MBKM</th>
                                        <th>ID Instansi</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Selesai</th>
                                        <th>Posisi</th>
                                        <th>ID Supervisor</th>
                                        <th>File Laporan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mbkm as $item)
                                        <tr>
                                            <td>{{ $item->id_mbkm }}</td>
                                            <td>{{ $item->nim_mahasiswa }}</td>
                                            <td>{{ $item->nama_mbkm }}</td>
                                            <td>{{ $item->tipe_mbkm }}</td>
                                            <td>{{ $item->id_instansi }}</td>
                                            <td>{{ $item->tanggal_mulai }}</td>
                                            <td>{{ $item->tanggal_selesai }}</td>
                                            <td>{{ $item->posisi }}</td>
                                            <td>{{ $item->id_supervisor }}</td>
                                            <td>{{ $item->laporan_file }}</td>
                                            {{-- <td>{{ $item->alamat }}</td> --}}
                                            <td>
                                                <a href="#modalEdit{{ $item->id_mbkm }}" class="btn btn-warning"
                                                    data-toggle="modal"><i class="fa fa-edit"></i></a>
                                                <a href="#modalHapus{{ $item->id_mbkm }}" class="btn btn-danger"
                                                    data-toggle="modal"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <!-- Add other table cells as needed -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

    <!-- Large modal -->
    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah data MBKM</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('mbkm.store') }}">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Nama MBKM</label>
                            <input type="text" class="form-control" name="nama_mbkm" placeholder="Nama MBKM">
                        </div>
                        
                        <div class="form-group">
                            <label>NIM Mahasiswa</label>
                            <input type="text" class="form-control" name="nim_mahasiswa" placeholder="NIM">
                        </div>

                        {{-- <div class="form-group">
                            <label for="nim_mahasiswa_disabled">Mahasiswa</label>
                            <select name="nim_mahasiswa_disabled" class="form-control" required>
                                @foreach($mahasiswa as $id => $mahasiswa)
                                    <option value="{{ $id }}">{{ $mahasiswa }}</option>
                                @endforeach
                            </select>

                        </div> --}}

                        <div class="form-group">
                            <label for="mbkm_type">Tipe MBKM</label>
                            <select name="tipe_mbkm" class="form-control" required>
                                @foreach($tipe_mbkm as $id => $tipe_mbkm)
                                    <option value="{{ $id }}">{{ $tipe_mbkm }}</option>
                                @endforeach
                            </select>

                            {{-- <select class="form-control" name="tipe_mbkm" required>
                                <option>---Select One---</option>
                                @foreach ($data_mahasiswa as $mahasiswa)
                                    <option value="{{ $mahasiswa->nim }}" data-nama="{{ $mahasiswa->nama }}">
                                        {{ $mahasiswa->nim }} - {{ $mahasiswa->nama }}</option>
                                @endforeach
                            </select> --}}

                        </div>

                        <div class="form-group">
                            <label for="id_instansi">Instansi</label>
                            <select name="id_instansi" class="form-control" required>
                                @foreach($instansi as $id => $instansi)
                                    <option value="{{ $id }}">{{ $instansi }}</option>
                                @endforeach
                            </select>

                        </div>   

                        <div class="form-group">
                            <label for="id_supervisor">Supervisor</label>
                            <select name="id_supervisor" class="form-control" required>
                                @foreach($supervisor as $id => $supervisor)
                                    <option value="{{ $id }}">{{ $supervisor }}</option>
                                @endforeach
                            </select>

                        </div>                  
                        
                        <div class="form-group">
                            <label>Posisi</label>
                            <input type="text" class="form-control" name="posisi" placeholder="(Back-end Developer...)">
                        </div>

                        {{-- <div class="form-group">
                            <label for="id_instansi">Instansi</label>
                            <select class="form_control" name="id_instansi" required>
                                @foreach($instansi as $id => $instansi)
                                    <option value="{{ $id }}">{{ $instansi }}</option>
                                @endforeach
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <label>Waktu Mulai</label>
                            <input class="form-control datepicker" name="tanggal_mulai"/>
                        </div>

                        <div class="form-group">
                            <label>Waktu Selesai</label>
                            <input class="form-control datepicker" name="tanggal_selesai" />
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <!-- modal hapus -->
    @foreach ($data_mbkm as $mbkm)
        <div class="modal fade" id="modalHapus{{ $mbkm->id_mbkm }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus data mbkm</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('mbkm.destroy', $mbkm->id_mbkm) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <h5>Yakin ingin menghapus data?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">cancel</button>
                            <button type="submit" class="btn btn-danger">Yakin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- modal edit -->
    


@endsection
