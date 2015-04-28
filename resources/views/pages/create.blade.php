@extends ('app')

@section ('content')

    {!! Form::model($page, ['route' => 'pages.index']) !!}
        @include('pages.forms.resource')
    {!! Form::close() !!}

@stop
