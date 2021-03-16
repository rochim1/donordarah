@extends('layouts.master')
@section('title', 'buat permohonan')
@section('content')
<!-- wpo-mission-area start -->
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <span>form permohonan</span>
                    <h2>Buat Permohonan Baru Pendonoran Darah</h2>
                    </h2>
                </div>
            </div>
        </div>

        <div class="wpo-mission-wrap">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {{-- <div class="wpo-donate-header">
                        <h2>Make a Donation</h2>
                    </div> --}}
                    <div id="Donations" class="tab-pane">
                        <form action="#">
                            <div class="wpo-donations-details bg-white">
                                <h2>Details</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="name" id="fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Last Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                        <input type="text" class="form-control" name="Adress" id="Adress"
                                            placeholder="Adress">
                                    </div>
                                    <div class="col-lg-12 col-12 form-group">
                                        <textarea class="form-control" name="note" id="note"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="submit-area">
                                <button type="submit" class="theme-btn submit-btn">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
