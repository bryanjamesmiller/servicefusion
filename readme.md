## Test project for Service Fusion

This app stores a list of persons, containing the following fields: firstname, lastname, date of birth and zip-code
and uses CRUD functionality.  You can view this web app live at http://servicefusion.grat.xyz/

## Features

Cross-site request forgery (CSRF) protection by using Laravel forms correctly.
Data input validation on the server side (I could add browser JavaScript validation as well, 
but just to demonstrate that the more critical server-side validation is there I will skip the layer of JavaScript validation
which can be bypassed by a hacker anyway).
Bootstrap 3 framework
Javascript injection protection through my custom-made service provider.
SQL injection protection through Eloquent ORM (Object-relational mapping).