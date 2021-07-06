@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-agencies                    {color: var(--primary-color)!important}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.bibles') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_1') !!}<div>
        {!!  trans('shin::fab.help.more') !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => trans('shin::fab.resources.title'),
        'subtitle'        => trans('shin::fab.resources.subtitle'),
        'icon'            => 'menu_library1',
        'iconClass'       => 'banner-icon',
        'iconType'        => 'icons',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/books.jpg',
        'tabs' => [
            i18n_link('bibles') => trans('shin::fields.bibles') .' <span class="tab-badge">'. number_format(\DigitalBibleSociety\Shin\Models\Bible\Bible::count()).'</span>',
            i18n_link('films')  => trans('shin::fields.films') .' <span class="tab-badge">'. number_format(\DigitalBibleSociety\Shin\Models\Resource\Film::count()).'</span>',
            '#'                 => trans('shin::fields.resources') .' <span class="tab-badge">'. number_format(\DigitalBibleSociety\Shin\Models\Resource\Resource::count()).'</span>',
            ],
        'breadcrumbs' => [
                i18n_link('/')  => trans('shin::fields.home'),
                i18n_link('/bibles')  => 'Bibles',
                '#'             => 'Resources',
           ]
    ])

    @include('shin::resources.index')

@endsection

