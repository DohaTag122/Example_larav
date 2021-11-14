@extends('templates.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit New User') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('admin.users.update',$user->id) }}">
                    @method('PATCH')
                    @include('admin.users.partials.form')                   
                    </form>
                                </div>
            </div>
        </div>
    </div>
</div>
@endsection
