@extends('layout.template')
@section('title','Riwayat')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Riwayat Pengajuan') }}</h1>
@include("riwayat.table")


@endsection