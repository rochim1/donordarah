@extends('layouts.master')
@section('title', 'edit permohonan')
@section('content')
<!-- wpo-mission-area start -->
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <span>form edit permohonan</span>
                    <h2>Edit Permohonan id: 2323 </h2>
                </div>
            </div>
        </div>

        <div class="wpo-mission-wrap">
            <div class="row">
                <div class="col-lg-8">
                    {{-- <div class="wpo-donate-header">
                        <h2>Make a Donation</h2>
                    </div> --}}
                    <div id="Donations" class="tab-pane">
                        <form action="#">
                            <div class="wpo-donations-details bg-white">
                                <h2>Detail</h2>
                                <div class="row">
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Nama">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group clearfix">
                                        <input type="number" class="form-control" name="umur" id="umur"
                                            placeholder="Umur">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            placeholder="Alamat">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <select style="height: 50px" class="form-control" name="goldar" id="goldar">
                                            <option value="">Golongan Darah</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="number" class="form-control" name="kantong" id="kantong"
                                            placeholder="Jumlah Kantong Darah">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="alamat" id="alamat"
                                            placeholder="Alamat">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="bangsal" id="bangsal"
                                            placeholder="Bangsal">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="rumahsakit" id="rumahsakit"
                                            placeholder="Rumah Sakit">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="date" class="form-control" name="tanggal" id="tanggal"
                                            placeholder="date">
                                    </div>
                                    
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="telp" id="telp"
                                            placeholder="no telp pasien/keluarga">
                                    </div>

                                    <div class="mb-3 col-lg-12 col-12 form-group">
                                        <textarea class="form-control" name="note" id="note"
                                            placeholder="Deskripsi Rincian Kebutuhan"></textarea>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="submit-area">
                                <button type="submit" class="theme-btn submit-btn">Buat Permohonan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    {{-- <div class="wpo-donate-header">
                        <h2>Make a Donation</h2>
                    </div> --}}
                    <div id="Donations" class="tab-pane">
                        <form action="#">
                            <div class="wpo-donations-details bg-white">
                                <h2>foto</h2>
                                <div class="row">
                                    <div class="mb-3 col-lg-6  col-md-6 col-sm-6 col-12 form-group">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="submit-area">
                                <button type="submit" class="theme-btn submit-btn">Update Permohonan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
