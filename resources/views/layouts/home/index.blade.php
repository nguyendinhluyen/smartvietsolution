@extends('layouts.master.master')
@section('title', 'Tư vấn thiết kế website chuyên nghiệp | Chuẩn SEO GG - Giao diện đẹp')
@section('content')

<!--Valuable-->
@include('layouts.home.valuable')
<!--End valuable-->

<!--Customer benefit-->
@include('layouts.home.customer')
<!--End Customer benefit-->

<!-- Templates -->
@include('layouts.home.templates')
<!-- End templates -->

<!-- Marketing -->
@include('layouts.home.marketing')
<!-- End marketing -->

<!-- Marketing -->
@include('layouts.home.about')
<!-- End marketing -->

<!--Popup-->
@include('layouts.popup.info')
<!--End popup-->

@endsection
@section('scripts')
<script src="{{ asset ('js/homepage.js') }}?v={{ time() }}" type="text/javascript"></script>
@endsection