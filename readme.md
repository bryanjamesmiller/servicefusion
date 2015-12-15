## Test project for Service Fusion

This app stores a list of persons, containing the following fields: firstname, lastname, date of birth and zip-code
and uses CRUD functionality.  You can view this web app live at http://servicefusion.grat.xyz/

## Features

* RESTful routing for CRUD functionality.
        * Utilized the Blade templating engine to reduce repetition in HTML pages.
        * Javascript data validation and warnings for user input on both the create and update pages (public/js/custom.js).
        * Server-side data validation on both the create and update pages (app/Http/Requests/UserRegistrationRequest.php).  Try entering an invalid date to see the server-side input validation at work.
        * Made use of the Google Maps API to produce some details about the zip codes that get entered (displayed on the http://servicefusion.grat.xyz/records page).
        * Responsive design using Bootstrap 3 framework - try resizing the "Complete list of records" page, for example (http://servicefusion.grat.xyz/records).
        * Javascript injection protection through my custom-made middleware (app/Http/Middleware/NoBracketsAllowed.php).  Try entering a <code>&lt;script&gt;</code> tag into one of the input fields and try to submit it to see the result.
        * Automatic SQL injection protection through Eloquent ORM (Object-relational mapping).
        * Used route-model binding (http://laravel.com/docs/5.1/routing#route-model-binding), a nice feature of Laravel 5.1 that injects the right model instance into the corresponding controller.
        * Cross-site request forgery (CSRF) protection by using Laravel forms correctly.
        * Customized layer of CSS (public/css/custom.css).