@extends ('app')

@section ('content')

    {!! Form::model($page, ['route' => ['pages.update', $page->slug], 'method' => 'PATCH']) !!}
        @include('pages.forms.resource')
    {!! Form::close() !!}

@stop
