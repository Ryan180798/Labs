@extends('layout.app')

@section('content')

@include('nav.nav');


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Contact</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Contact</span>
            </div>
        </div>
    </div>
</div>

<!-- Page header end --> 


<!-- Google map -->
<div class="map" id="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.677547723151!2d4.3792001157454346!3d50.837136379530556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4bb2d6e18ef%3A0x2e092e0d4f1035c!2sPlace%20Jourdan!5e0!3m2!1sfr!2sbe!4v1589716653410!5m2!1sfr!2sbe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


@include('templates.contact')
@include('footer.footer')

@endsection