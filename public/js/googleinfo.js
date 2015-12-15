window.onload = function() {
    // Get the Google Maps API information for each zip code for the "list all records" page
    var zip_code_els = document.getElementsByClassName("log_input");
    var zip_code_outs = document.getElementsByClassName("log_output");
    for (var i = 0; i < zip_code_els.length; i++) {
        getGeo(zip_code_els[i], zip_code_outs[i]);
    }
};

/**
 * Get the Google Maps API information for each zip code for the "list all records" page
 * @param zip_code
 * @param zip_out
 */
function getGeo(zip_code, zip_out) {
    var this_zip = zip_code.textContent.toString().trim();

    //These variable gets the JSON response from the Google geo location
    var json_response = '';
    var json_parsed_results = '';

    // Make an XmlHttpRequest
    var x = new XMLHttpRequest();
    x.open("GET", "http://maps.googleapis.com/maps/api/geocode/json?address=" + this_zip, true);

    // Send the XmlHttpRequest
    x.send();

    // Listener for the XmlHttpRequest response
    // You MUST HAVE ALL CODE THAT MAKES USE OF this.response INSIDE OF THE IF STATEMENT's BRACKETS!!!
    x.onreadystatechange = function() {
        //In this function, "this" refers to "x", which was defined above as: var x = new XMLHttpRequest();

        if (this.readyState == 4 && this.status == 200) {
            json_response = this.response;

            // Parse the JSON response
            json_parsed_results = JSON.parse(this.response);
            var extraLocationInfo = document.createElement("SPAN");
            var extraLocationText = 'Geo analysis of Zip Code ';

            for (var i = 0; i < json_parsed_results.results[0].address_components.length; i++) {
                extraLocationText += json_parsed_results.results[0].address_components[i].long_name + " - ";
            }
            extraLocationText += "Latitude: " + json_parsed_results.results[0].geometry.location.lat +
                " - Longitude: " + json_parsed_results.results[0].geometry.location.lng;

            var extraLocationTextNode = document.createTextNode(extraLocationText);
            extraLocationInfo.appendChild(extraLocationTextNode);
            zip_out.appendChild(extraLocationInfo);
        }
    }
}

