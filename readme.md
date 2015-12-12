## Test project for Service Fusion

This app stores a list of persons, containing the following fields: firstname, lastname, date of birth and zip-code
and uses CRUD functionality.  You can view this web app live at http://servicefusion.grat.xyz/

## Features

Javascript data validation and warnings for user input (public/js/custom.js).
Server-side data validation (app/Http/Requests/UserRegistrationRequest.php).
Made use of the Google Maps API to produce some details about the zip codes that get entered (displayed on the http://servicefusion.grat.xyz/records page).
Responsive design using Bootstrap 3 framework - try resizing http://servicefusion.grat.xyz/records
Javascript injection protection through my custom-made middleware (app/Http/Middleware/NoBracketsAllowed.php).
Automatic SQL injection protection through Eloquent ORM (Object-relational mapping).
Cross-site request forgery (CSRF) protection by using Laravel forms correctly.
Customized layer of CSS (public/css/custom.css).