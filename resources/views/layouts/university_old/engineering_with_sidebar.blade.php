@include('university.header')
<section id="content">
  <div class="content-wrap py-0">



    <div class="container-fluid my-0  px-0 px-md-3">


      <div class="row">
@include('university.sidebar.engineering_sidebar')
@hasSection('content')
@yield('content')
@else
{!!"<h1>No Content section is written for this page</h1>"!!}
@endif
@include('university.footer.engineering_footer')
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/functions.bundle.js')}}"></script>