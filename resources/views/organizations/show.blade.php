@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ $organization->name }} | {{ trans('app.title') }}</title>
    <style>
        .org-name       {font-size:1.8em; color: var(--primary-color); text-transform: uppercase; margin: 1.3em 0 .25em;}
        .org-info       {padding: 0 1.5em;}
        .logo           {margin: 0 auto;max-width: 200px;width: 100%;}
        .social-links   {text-align: center;}
        .social-links a {font-size: 1.5em; padding:0 .25em;}
        address         {font-size: .8em; display: inline-flex;align-items: center;justify-content: center;flex-direction: column; font-style:normal;
                        margin-bottom:2em;}
        address b       {margin-top: 1rem;}
        #subheader nav[role=tablist] a[aria-selected=true] {border-radius: 10px 10px 0 0; color: #000;}
        .count {background-color: var(--primary-color);width: 2.7em; color: #fff;
            border-radius: 16px; margin: 0 3px 0 9px; font-size:.8em; padding:3px; text-decoration: none;}


    </style>
@endsection

@include('shin::_partials.banner', [
    'title'           => $organization->name,
    'backgroundImage' => "https://images.bible.cloud/fab/banners/agencies/$organization->id.jpg",
    'icon'            => 'people_groups',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'tabs' => [
        'bibles'    => "Bibles <span class='tab-badge'>". count($bibles['data']) . "</span>",
        'resources' => "Resources <span class='tab-badge'>". count($resources['data']) . "</span>"
    ]
])

@section('main')
    @include('shin::organizations.show', [
        'organization' => $organization,
        'bibles' => $bibles,
        'resources' => $resources
    ])
@endsection
