@extends('layouts.app')

@section('title', 'Subject Attendance')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Subject Attendance</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Subject Attendance</a></div>
                    <div class="breadcrumb-item">Show QRCode</div>
                </div>
            </div>
            <div class="section-body">
                <div class="visible-text text-center">
                    {!! QrCode::size(256)->generate($code) !!}
                    <p>Scan me to return to the original page.</p>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
