@extends('templates.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create New User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                    @include('admin.users.partials.form',['create'=>true])                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
