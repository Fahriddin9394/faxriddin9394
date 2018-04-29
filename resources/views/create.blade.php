@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ URL('users'}}{{isset($user) ? '/' . $user->id : '')}}" method="POST">
                <div class="form-group">
                    {{ csrf_field() }}
                    @if(isset($user))
                        {{ method_field('PUT') }}
                        @endif
                    <input type="text" name="name" placeholder="Name" class="form-control" value="{{ isset($user)? $user->name : '' }}">
                    <input type="Email" name="email" placeholder="Email" class="form-control" value="{{ isset($user)? $user->eamail : '' }}">
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    @endsection