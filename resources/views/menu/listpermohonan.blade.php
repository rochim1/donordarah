@extends('layouts.master')
@section('title', 'list permohonan')
@section('content')
<div class="section-padding">

    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <h2>List Permohonan Donor Ku</h2>
                    {{-- <span>form permohonan</span> --}}
                </div>
            </div>
        </div>
        <div>
            <ul class="list-inline">
                <li class="list-inline-item p-3 text-black"> <a href="">berlangsung</a></li>
                <li class="list-inline-item p-3 text-black"> <a href="">selesai</a></li>
                <li class="list-inline-item p-3 text-black"> <a href="">dihapus</a></li>
            </ul>
        </div>
        <div class="row position-relative p-3 border border-start-0 border-end-0 border-2">
            <div class="d-flex flex-row-reverse bd-highlight">
                <div title="dilihat" class="p-2 bd-highlight">
                    <i class="ti-eye"></i> : 9
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fa fa-user" aria-hidden="true"></i> : 5
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fa fa-check-circle" aria-hidden="true"></i> : 2
                </div>
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="img-holder">
                    <img class="rounded mx-auto d-block" src="../../assets/images/blog/img-4.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7 position-relative">

                <div class="content p-3">
                    <h3 class="text-capitalize">dicari pendonor goldar AB</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam modi nam voluptas, eius eum dicta
                    vero accusantium consequuntur quia quod ratione dolore repellendus. Optio ratione magnam deserunt,
                    quisquam itaque laboriosam.
                    lorem
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="mb-3 text-white form-control btn btn-success">EDIT</button>
                        </div>
                        <div class="col-md-6">
                            <button class="mb-3 text-white form-control btn btn-danger">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
