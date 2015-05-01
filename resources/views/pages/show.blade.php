@extends ('app')

@section ('content')

    {{ $page->title }} <br />
    {{ $page->slug }}

    {!! link_to_route('pages.edit', 'Edit (i18n)', $page->slug) !!} <br />

    @include('pages.forms.delete')

@stop
