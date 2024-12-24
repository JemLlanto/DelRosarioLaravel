@extends('layouts.mainPageLayout')
@section('title', 'Home')
@section('content')
    <div class="">
        <div class="d-flex flex-column gap-3">
            @include('components.user.navBar')
            @include('components.user.dashboardData')
        </div>
    </div>
@endsection
