@extends('layout.template')
@section('title', 'Setting')
@section('subtitle', 'Setting')
@section('content')
    <div class="row justify-content-left">
        <div class="col-md-4">
            <div class="card border-bottom-primary">
                <div class="card-header bg-primary font-weight-bold text-light"><i class="fa fa-gears"></i> Setting
                </div>
                <div class="card-body shadow">
                    <form method="post" action="{{ url('edit_setting') }}" role="form">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Email</label>
                                        <input class="form-control shadow" type="email" name="email" placeholder="Email"
                                            value="{{ auth()->user()->email }}" disabled>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Password</label>
                                        <input class="form-control shadow" type="password" name="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group text-dark">
                                        <label class="font-weight-bold text-dark">Konfirmasi Password</label>
                                        <input class="form-control shadow" type="password" name="password_confirmation"
                                            placeholder="Konfirmasi Password">
                                        @error('')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-sm btn-flat btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection