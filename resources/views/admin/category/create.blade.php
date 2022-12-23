@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Category</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <div class="card">

            {!! Form::open(['route' => 'users.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('admin.user.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
@push('user-create-blade')
    <script>
        $(document).ready(function(){
            $('#role').on('change', function(){
                if($(this).val() == 2){
                    // Role Mason
                    $('#aadharField').css({"display":"block"}) ;
                } else{
                    $('#aadhaar_no').val("") ;
                    $('#aadharField').css({"display":"none"}) ;

                }
               
            });
        });
    </script>
@endpush
