@extends('admin.layouts.app')
@section('pagename', 'File Manager')
@section('breadcrumb')
    <li class="breadcrumb-item active">File Manager</li>
@endsection
@section('content')
    <div class="content">
        <div id="fm" style="height: 100vh;"></div>
    </div>
@endsection

@push('filemanagerstyles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}" />
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endpush
