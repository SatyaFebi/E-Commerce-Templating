@extends('be.master')
@section('sidebar')
    @include('be.sidebar')
@endsection
@section('navbar')
    @include('be.navbar')
@endsection
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
                    <div class="col">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="text-secondary mb-5">Food Package::.Create</h3>
                            <form action="{{route('paket.store')}}" method="POST" name="frmPaket" id="frmPaket" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_paket" class="form-label">Package Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nama_paket" name="nama_paket" 
                                    placeholder="example: Regular Wedding Package" maxlength="50" value="@isset($namaPaket) {{$namaPaket}} @endisset">
                                    <div id="packageNameHelp" class="form-text text-warning">You can only input 50 characters
                                    </div>
                                </div>
                                <div class="mb-3">
                                 <label for="jenis" class="form-label">Package Type<span class="text-danger">*</span></label>
                                    <select class="form-select" id="jenis" name="jenis">
                                        <option selected>Open this select menu</option>
                                        <option value="Prasmanan" @if(@isset($jenis) and $jenis == ' Prasmanan') selected @endif>Buffet</option>
                                        <option value="Box" @if(@isset($jenis) and $jenis == ' Box') selected @endif>Box</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                 <label for="category" class="form-label">Category<span class="text-danger">*</span> </label>
                                    <select class="form-select" id="category" name="kategori">
                                        <option selected>Open this select menu</option>
                                        <option value="Pernikahan" @if(@isset($kategori) and $kategori === ' Pernikahan') selected @endif>Wedding</option>
                                        <option value="Selamatan" @if(@isset($kategori) and $kategori === ' Selametan') selected @endif>Salvation</option>
                                        <option value="Ulang Tahun" @if(@isset($kategori) and $kategori === ' Ulang Tahun') selected @endif>Birthday Party</option>
                                        <option value="Studi Tour" @if(@isset($kategori) and $kategori === ' Studi Tour') selected @endif>Study Tour</option>
                                        <option value="Rapat" @if(@isset($kategori) and $kategori === ' Rapat') selected @endif>Meeting</option> 
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="pax amount" class="form-label">Pax Amount<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-end" id="pax_amount" name="jumlah_pax" value = "@if(@isset($jumlahPax)){{$jumlahPax}}@else{{'0'}}@endif">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-end" id="price" name="harga_paket" value = "@if(@isset($hargaPaket)){{$hargaPaket}}@else{{'0'}}@endif">
                                </div>
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" placeholder="Leave a description here" 
                                    id="description" name="deskripsi" style="height: 150px;">@if(@isset($deskripsi)) {{$deskripsi}} @endif</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image1" class="form-label">1<sup>st</sup> Image</label>
                                    <input class="form-control" type="file" id="image1" name="foto1">
                                </div>
                                <div class="mb-3">
                                    <label for="image2" class="form-label">2<sup>nd</sup> Image</label>
                                    <input class="form-control" type="file" id="image2" name="foto2">
                                </div>
                                <div class="mb-3">
                                    <label for="image3" class="form-label">3<sup>rd</sup> Image</label>
                                    <input class="form-control" type="file" id="image3" name="foto3">
                                </div>
                                <div class="mb-3 mt-5 text-end">
                                    <div class="btn-group" role="group">
                                        <a href="{{route ('paket.index')}}" class="btn btn-secondary">
                                            <i class="fas fa-ban me-2"></i>Cancel</a>
                                        <button type="button" class="btn btn-primary" id="btnSimpan">
                                            <i class="fas fa-sd-card me-2"></i>Save A New Package</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
    </div>
</div>
<div id="pesan" class="invisible">@isset($pesan) {{$pesan}} @endisset</div>
<script>
    const btnSave = document.getElementById('btnSimpan')
    const nama_paket = document.getElementById('nama_paket')
    const jenis_paket = document.getElementById('jenis')
    const kategori = document.getElementById('category')
    const jumlah_pax = document.getElementById('pax_amount')
    const harga = document.getElementById('price')
    const form = document.getElementById('frmPaket')
    const pesan = document.getElementById('pesan')


    function simpan(){
        if(nama_paket.value === ''){
            nama_paket.focus()
            swal("Invalid Data!", "Package Name type must be selected first!", "error")
        }else if(jenis_paket.value === 'Open this select menu'){
            jenis_paket.focus()
            swal ("Invalid Data!", "Package type must be selected first!", "error")
        }else if(kategori.value === 'Open this select menu'){
            kategori.focus()
            swal ("Invalid Data!", "Category type must be selected first!", "error")
        }else if(jumlah_pax.value === '0'){
            jumlah_pax.focus()
            swal ("Invalid Data!", "Pax Amount must be filled in!", "error")
        }else if(harga.value === '0'){
            harga.focus()
            swal ("Invalid Data!", "Price must be filled in!", "error")
        }
        else{
            form.submit()
        }
    }

    function tampil_pesan(){
        if(pesan.innerHTML.trim() !== ''){
            swal('Data Duplication', pesan.innerHTML, 'error')
        }
    }

    jumlah_pax.onfocus = function(){
        if(jumlah_pax.value.trim() === '0') jumlah_pax.value = ''
    }
    jumlah_pax.onblur = function(){
        if(jumlah_pax.value.trim() === '') jumlah_pax.value = '0'
    }
    jumlah_pax.onkeydown = function(){
        angka(event)
    }

    btnSave.onclick = function(){
       simpan()
    }

    body.onload = function(){
       tampil_pesan()
    }
</script>
@endsection
@section('footer')
    @include('be.footer')
@endsection