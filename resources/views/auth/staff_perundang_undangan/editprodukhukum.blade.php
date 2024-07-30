@extends('auth.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Produk Hukum</h1>
</div>
<div class="row">
    <div class="col">
        <form action="/dashboard/staffu/editprodukhukum/{{$draft->id}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="fs-6">
                Operator SKPD
            </div>
            <input type="text" class="form-control input mt-2" value="{{ $draft->admin->draft->user->name }}" readonly>

            <div class="fs-6 mt-3">
                Jenis / Bentuk Peraturan 
            </div>
            <input type="text" class="form-control input mt-2" value="{{ $draft->admin->draft->jenis->jenis }}" readonly>

            <div class="fs-6 mt-3">
                Judul Produk Hukum 
            </div>
            <input type="text" class="form-control input mt-2" value="{{ $draft->admin->draft->judul }}" readonly>

            <div class="row">
                <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                    <div class="fs-6 mt-3">
                        Tanggal Pengajuan
                    </div>
                    <input type="date" class="form-control input mt-2" value="{{ $draft->admin->draft->tanggal_pengajuan }}" readonly>
                </div>
            </div>

            <div class="fs-6 mt-3">
                Keterangan Admin FO
            </div>
            <textarea type="text" class="form-control input mt-2" style="height:100px" readonly>{{ $draft->admin->keterangan }}</Textarea>

            <div class="row">
                <div class="col-6">
                    <div class="fs-6 mt-3">
                        Surat Pengajuan
                    </div>
                    <div class="row mt-2">
                        <div class="col-11 col-sm-8 col-md-7 col-lg-8 col-xl-8 rounded-3 border-1 border border-dark px-2 py-2 ms-3" style="background-color: #e9ecef">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-file"></i>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="{{ $draft->admin->draft->surat_pengajuan }}" style="border: none; background-color: #e9ecef; width: 105%;" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ asset('storage/' . $draft->admin->draft->surat_pengajuan )}}" class="ms-2" style="vertical-align: -webkit-baseline-middle">Download</a>
                        </div>
                    </div>
                    <!-- <a href="{{ asset('storage/' . $draft->admin->draft->surat_pengajuan)}}" class="btn btn-primary mt-2">Download</a> -->
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="fs-6 mt-3">
                        Draft Produk Hukum
                    </div>
                    <div class="row mt-2">
                        <div class="col-11 col-sm-8 col-md-7 col-lg-8 col-xl-8 rounded-3 border-1 border border-dark px-2 py-2 ms-3" style="background-color: #e9ecef">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-file"></i>
                                </div>
                                <div class="col-9 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                    <input type="text" value="{{ $draft->admin->draft->draft_produk_hukum }}" style="border: none; background-color: #e9ecef; width: 105%;" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ asset('storage/' . $draft->admin->draft->draft_produk_hukum )}}" class="ms-2" style="vertical-align: -webkit-baseline-middle">Download</a>
                        </div>
                    </div>
                    <!-- <a href="{{ asset('storage/' . $draft->admin->draft->draft_produk_hukum)}}" class="btn btn-primary mt-2">Download</a> -->
                </div>
                @if($draft->admin->draft->draft_produk_hukum_lama)
                <div class="col">
                    <div class="fs-6 mt-3">
                        Draft Produk Hukum Lama
                    </div>
                    <div class="row mt-2">
                        <div class="col-11 col-sm-8 col-md-7 col-lg-8 col-xl-8 rounded-3 border-1 border border-dark px-2 py-2 ms-3" style="background-color: #e9ecef">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-file"></i>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="{{ $draft->admin->draft->draft_produk_hukum_lama }}" style="border: none; background-color: #e9ecef; width: 105%;" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ asset('storage/' . $draft->admin->draft->draft_produk_hukum_lama )}}" class="ms-2" style="vertical-align: -webkit-baseline-middle">Download</a>
                        </div>
                    </div>
                    <!-- <a href="{{ asset('storage/' . $draft->admin->draft->draft_produk_hukum_lama)}}" class="btn btn-primary mt-2">Download</a> -->
                </div>
                @endif
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="fs-6 mt-3">
                        Upload Revisi Produk Hukum
                    </div>
                    <input type="file" class="form-control input @error('revisi_produk_hukum') is-invalid @enderror mt-2" 
                    name="revisi_produk_hukum" id="revisi_produk_hukum">

                    @error('revisi_produk_hukum')
                    <div class="text-danger">
                        <small>{{ $message }}</small> 
                    </div>
                    @enderror
                </div>

                @if(isset($draft->revisi_produk_hukum))
                <div class="col-6">
                    <div class="fs-6 mt-3">
                        File Lama
                    </div>
                    <div class="row mt-2">
                        <div class="col-11 col-sm-8 col-md-7 col-lg-8 col-xl-8 rounded-3 border-1 border border-dark px-2 py-2 ms-3" style="background-color: #e9ecef">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-file"></i>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="{{ $draft->revisi_produk_hukum }}" style="border: none; background-color: #e9ecef; width: 105%;" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ asset('storage/' . $draft->revisi_produk_hukum )}}" class="ms-2" style="vertical-align: -webkit-baseline-middle">Download</a>
                        </div>
                    </div>
                    <!-- <a href="{{ asset('storage/' . $draft->revisi_produk_hukum)}}" class="btn btn-primary mt-2">Download</a> -->
                </div>
                @endif
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="fs-6 mt-3">
                        Upload NPKND
                    </div>
                    <input type="file" class="form-control input @error('npknd') is-invalid @enderror mt-2" 
                    name="npknd" id="npknd">

                    @error('npknd')
                    <div class="text-danger">
                        <small>{{ $message }}</small> 
                    </div>
                    @enderror
                </div>

                @if(isset($draft->npknd))
                <div class="col-6">
                    <div class="fs-6 mt-3">
                        File Lama
                    </div>
                    <div class="row mt-2">
                        <div class="col-11 col-sm-8 col-md-7 col-lg-8 col-xl-8 rounded-3 border-1 border border-dark px-2 py-2 ms-3" style="background-color: #e9ecef">
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-file"></i>
                                </div>
                                <div class="col-10">
                                    <input type="text" value="{{ $draft->npknd }}" style="border: none; background-color: #e9ecef; width: 105%;" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ asset('storage/' . $draft->npknd )}}" class="ms-2" style="vertical-align: -webkit-baseline-middle">Download</a>
                        </div>
                    </div>
                    <!-- <a href="{{ asset('storage/' . $draft->npknd)}}" class="btn btn-primary mt-2">Download</a> -->
                </div>
                @endif
            </div>

            <div class="fs-6 mt-3">
                Keterangan
            </div>
            <textarea type="text" class="form-control input mt-2" 
            name="keterangan" id="keterangan" style="height:100px">{{ old('keterangan') }}</Textarea>

            @if($draft->keterangan_penolakan)
            <div class="fs-6 mt-3">
                Keterangan Penolakan
            </div>
            <textarea type="text" class="form-control input mt-2" style="height:100px" readonly>{{ $draft->keterangan_penolakan}}</Textarea>
            @endif
            
            <div class="row justify-content-end mt-4 mb-4">
                <div class="col-3">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary mt-2">Proses</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection