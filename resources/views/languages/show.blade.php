@extends('_layouts.main')
@section('header')
    @parent
    <style>
        a.nav-languages     {color: var(--primary-color)!important}
        .link-container a[href^="https://find.bible"] {display: none;}
        table.infobox      {border: thin solid #d7d7d7; border-radius: 6px;}
        .dataTables_header  {margin: 0 0 16px 0; padding:0;}
        .dataTables_filter, .dataTables_length, .dataTables_length select {padding:0;}
        .dataTables_header .dataTables_filter       {left:65px;}

    </style
@endsection

@section('subnav')
    @include('shin::_partials.banner', [
    'title'           => $language->name,
    'subtitle'        => '',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/languages_list.jpg',
    'tabs' => [
        'bibles-tab' => 'Bibles',
        'resources-tab' => 'Resources'
    ]
])
@endsection

@section('main')

    @include('shin::_partials.nav.breadcrumbs', [
        'breadcrumbs' => [
             i18n_link('/')          => trans('shin::fields.home'),
             i18n_link('/languages') => trans('shin::fields.languages'),
             '#'                     =>  $language->name,
        ]
    ])

    @include('shin::languages.show')
@endsection
