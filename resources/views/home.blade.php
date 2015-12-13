@extends('_base')

@section('title')
    Home | Service Fusion Application
@endsection

@section('header')
    Application Details
@endsection

@section('content')
    <h2>Web App for Service Fusion Job Opportunity</h2>

    <p>This app stores a list of persons, containing the following fields: firstname, lastname, date of birth and zip-code
        and uses CRUD functionality.  You can view the GitHub for this web app at <a href="https://github.com/bryanjamesmiller/servicefusion">https://github.com/bryanjamesmiller/servicefusion</a></p>

    <h2>Features</h2>
    <ul>
        <li>RESTful routing for CRUD functionality.</li>
        <li>Utilized the Blade templating engine to reduce repetition in HTML pages.</li>
        <li>Javascript data validation and warnings for user input on both the create and update pages (public/js/custom.js).</li>
        <li>Server-side data validation on both the create and update pages (app/Http/Requests/UserRegistrationRequest.php).  Try entering an invalid date to see the server-side input validation at work.</li>
        <li>Made use of the Google Maps API to produce some details about the zip codes that get entered (displayed on the http://servicefusion.grat.xyz/records page).</li>
        <li>Responsive design using Bootstrap 3 framework - try resizing http://servicefusion.grat.xyz/records</li>
        <li>Javascript injection protection through my custom-made middleware (app/Http/Middleware/NoBracketsAllowed.php).  Try entering a <code>&lt;script&gt;</code> tag into one of the input fields and try to submit it to see the result.</li>
        <li>Automatic SQL injection protection through Eloquent ORM (Object-relational mapping).</li>
        <li>Cross-site request forgery (CSRF) protection by using Laravel forms correctly.</li>
        <li>Customized layer of CSS (public/css/custom.css).</li>
    </ul>
@endsection