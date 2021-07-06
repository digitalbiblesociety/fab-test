@extends('_layouts.main')

@section('header')
    @parent
    <style>
        a.nav-countries    {color: var(--primary-color)!important}
        h3  {font-size: clamp(1rem, 3vw, 1.3rem); color: #666; text-align:center;margin-bottom: 1.5rem;}
    </style>
@endsection

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.countries') !!}
        <div class="small-hide">{!!  trans('shin::fab.help.started') !!}{!!  trans('shin::fab.help.scenario_2') !!}<div>
        {!!  trans('shin::fab.help.more') !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => trans('shin::fields.countries'),
        'subtitle'        => trans('shin::fab.countries.subtitle'),
        'icon'            => 'menu_countries',
        'iconClass'       => 'banner-icon',
        'iconType'        => 'icons',
        'tabs'            => [
            i18n_link('/countries') => trans('shin::fields.countries').' <span class="tab-badge">'.\DigitalBibleSociety\Shin\Models\Country\Country::count().'</span>',
            '#'                     => trans('shin::fields.geo.maps').' <span class="tab-badge">22</span>',
        ],
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/countries.jpg',
        'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            '#'   => trans('shin::fields.countries')
        ]
    ])

    @include('shin::countries.maps.world-maps')

@endsection
