
window.onload = function() {

    // Get the Google Maps API information for each zip code for the "list all records" page
    var zip_code_els = document.getElementsByClassName("log_input");
    var zip_code_outs = document.getElementsByClassName("log_output");
    for (var i = 0; i < zip_code_els.length; i++) {
        getGeo(zip_code_els[i], zip_code_outs[i]);
    }

    // Give the user hints for them to enter the data correctly for the "create a record" page
    inputValidation();
}

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
            console.log(json_parsed_results.results[0]);
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

/**
 * Give the user hints for them to enter the data correctly for the "create a record" page
 */
function inputValidation() {
    //This array tests to see if all data forms have been filled out correctly.
    //If not, it will prevent clicking the submit button
    var canSubmitTest = [];

    //This is how many tests there are
    var numOfTests = 5;

    //Initializing all of the tests
    for (var i = 0; i < numOfTests; i++) {
        canSubmitTest[i] = false;
    }
    var btnTest = false;
    var button = document.getElementById("btn");
    button.disabled = true;

    //Integer input validation
    var zip = document.getElementById("zip");
    document.getElementById("zip_hint").style.display = "none";
    zip.addEventListener("keyup", testZipDigits);
    function testZipDigits() {
        //regex expression created with help from https://www.debuggex.com
        if (/^\d{5}$/.test(zip.value)) {
            document.getElementById("zip_hint").style.display = "none";
            canSubmitTest[0] = true;
        } else {
            document.getElementById("zip_hint").style.display = "block";
            canSubmitTest[0] = false;
        }
    }

    //Button error checking
    document.addEventListener("keyup", noEmptyFieldsCheck);
    function noEmptyFieldsCheck() {
        if (zip.value == '') {
            document.getElementById("button_zip_hint").style.display = "block";
            canSubmitTest[1] = false;
        } else {
            document.getElementById("button_zip_hint").style.display = "none";
            canSubmitTest[1] = true;
        }

        if (document.getElementById("firstname").value == '') {
            document.getElementById("button_fn_hint").style.display = "block";
            canSubmitTest[2] = false;
        } else {
            document.getElementById("button_fn_hint").style.display = "none";
            canSubmitTest[2] = true;
        }

        if (document.getElementById("lastname").value == '') {
            document.getElementById("button_ln_hint").style.display = "block";
            canSubmitTest[3] = false;
        } else {
            document.getElementById("button_ln_hint").style.display = "none";
            canSubmitTest[3] = true;
        }

        if (document.getElementById("birthday").value == '') {
            document.getElementById("button_dob_hint").style.display = "block";
            canSubmitTest[4] = false;
        } else {
            document.getElementById("button_dob_hint").style.display = "none";
            canSubmitTest[4] = true;
        }

        //Test to see if all the input forms were filled out correctly
        //Disable ability to submit if errors remain
        var btnTest = false;
        for (var i = 0; i < numOfTests; i++) {
            if (canSubmitTest[i] == false) {
                btnTest = true;
            }
        }

        if (btnTest) {
            button.disabled = true;
        } else {
            button.disabled = false;
        }
    }
}

