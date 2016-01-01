@extends('_base')

@section('title')
    Home | Service Fusion Application
@endsection

@section('header')
    Application Details
@endsection

@section('content')
    <h2>Web App for Service Fusion Job Opportunity</h2>

    <p>This app stores records of personal information, containing the following fields: firstname, lastname, date of birth and zip-code
        and uses CRUD functionality.  <a href="https://github.com/bryanjamesmiller/servicefusion">You can view the GitHub for this web app by clicking here</a>.</p>
    <p><a href="/records/create">Click here to start using the app by creating a new record</a>, or read about the many features of this web application below.</p>

    <h2>Features</h2>
    <ul>
        <li>RESTful routing for CRUD functionality.</li>
        <li>Utilized the Blade templating engine to reduce repetition in HTML pages.</li>
        <li>Javascript data validation and warnings for user input on both the create and update pages (public/js/validation.js).</li>
        <li>Server-side data validation on both the create and update pages (<span class="allow_wrap">app/Http/Requests/UserRegistrationRequest.php</span>).  Try entering an invalid date to see the server-side input validation at work.</li>
        <li>Made use of the Google Maps API to produce some details about the zip codes that get entered (displayed on the <a href="http://servicefusion.grat.xyz/records">http://servicefusion.grat.xyz/records</a> page).</li>
        <li>Responsive design using Bootstrap 3 framework - try resizing <a href="http://servicefusion.grat.xyz/records">the "Complete list of records" page</a>, for example.</li>
        <li>Javascript injection protection through my custom-made middleware (<span class="allow_wrap">app/Http/Middleware/NoBracketsAllowed.php</span>).  Try entering a <code>&lt;script&gt;</code> tag into one of the input fields and try to submit it to see the result.</li>
        <li>Automatic SQL injection protection through Eloquent ORM (Object-relational mapping).</li>
        <li>Used <a href="http://laravel.com/docs/5.1/routing#route-model-binding">route-model binding, a nice feature of Laravel 5.1</a> that injects the right model instance into the corresponding controller.</li>
        <li>Cross-site request forgery (CSRF) protection by using Laravel forms correctly.</li>
        <li>Customized layer of CSS (public/css/custom.css).</li>
        <li>Entire site's HTML validates as HTML5 (<a href="https://validator.w3.org">W3C HTML validator</a>).</li>
        <li>CSS validates as CSS3 (<a href="https://jigsaw.w3.org/css-validator/">W3C CSS validator</a>).</li>
    </ul>
@endsection