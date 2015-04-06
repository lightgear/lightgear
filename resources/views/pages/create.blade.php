@extends ('layouts.default')

@section ('main')

    {!! Form::model($page, ['route' => 'pages.index']) !!}
        @include('pages.forms.resource')
    {!! Form::close() !!}

@stop
