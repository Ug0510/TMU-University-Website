@include('university.header')

<div class="d-flex">

@include('university.sidebar.physical_education_with_sidebar')
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
@include('university.footer')