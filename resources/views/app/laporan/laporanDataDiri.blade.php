@include('layouts.head.head')

<style>
    body{
        background-color: #fff !important;
    }
</style>

<section class="section">
    <div class="print-padding d-flex flex-column text-right mr-1"><br>
        <b>
            <p id="date" style="font-size: 15px;"></p>
        </b>
    </div>
    <div class="print-padding d-flex flex-column text-left">
        <div class="img-print d-flex justify-content-center mb-2">
            <img style="width:120px;" src="{{ asset('assets/stisla/img/logo/logo-3.png') }}" alt="RT">
        </div>
        <div class="w-full text-center d-flex justify-content-center flex-column">
            <h1>Rukun Tetangga</h1>
            <p>RT 001/01, Kel Rawajati, Kec Pancoran, Jakarta Selatan</p>
        </div>
        <div class="text-center mt-3">
            <h4 class="text-primary">Laporan Seluruh Data Warga</h4>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-sm" id="table-1">
            <thead>
                <tr class="text-center" style="background-color: #eee;">
                    <th style="width: 10px;">No</th>
                    <th>Nama</th>
                    <th>No KK</th>
                    <th>NIK</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @include('_FUNCTION.tanggal-indo')
                @foreach ($data_diris as $res)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$res->nama_lengkap}} </td>
                    <td class="text-center">
                        <span class="badge badge-info" style="border:none;">{{$res->no_kk}}</span>
                    </td>
                    <td class="text-center">
                        <span class="badge badge-info" style="border:none;">{{$res->nik}}</span>
                    </td>
                    <td class="text-center">{{$res->tempat_lahir }} / {{ tgl_indo($res->tanggal_lahir) }}</td>
                    <td class="text-center">{{$res->agama}}</td>
                    <td class="text-center">{{$res->jenis_kelamin}}</td>
                    <td class="text-center">{{$res->pendidikan}}</td>
                    <td class="text-center">{{$res->pekerjaan}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</section>

@include('_FUNCTION.dateToday')
<script>
    window.print();  
</script>
