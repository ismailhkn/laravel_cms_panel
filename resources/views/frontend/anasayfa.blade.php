@extends('frontend.layouts.app')

@section('css')
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ URL::asset('frontend') }}/plugins/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('frontend') }}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('frontend') }}/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('frontend') }}/css/one-page-parallax/style.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('frontend') }}/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('frontend') }}/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
@endsection
