@extends('template.template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <section>
            <div class="container py-4">
                <form action="/pesan/tambah" method="POST">
                {{ csrf_field() }}
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                            <div class="row">
                                <div class="col text-center">
                                    <h1>Form Pemesanan</h1>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Alamat Email" name="email" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Instansi</label>
                                    <input type="text" class="form-control" placeholder="Nama Instansi" name="instansi" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">No. Telp</label>
                                    <input type="number" class="form-control" placeholder="Nomor Telepon" name="telp" required>
                                </div>
                            </div>
                            <div class="row align-items-center mt-4">
                                <div class="col">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col mt-4">
                                    <label class="form-label">Tanggal Peminjaman</label>
                                    <input type="text" class="form-control date" name="tanggal" id="datepicker" required>
                                </div>
                                <script id="rendered-js">
                                    $('.date').datepicker({
                                        multidate: 1, minDate :moment().add('d', 1).toDate(),
                                        format: 'dd-mm-yyyy',
                                    });
									
									
									
                                </script>
                            </div>

                            <a class="btn btn-primary btn-block mt-3" href="/pesan/tambah" role="button">Submit</a>

                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection