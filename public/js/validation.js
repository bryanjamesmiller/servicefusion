window.onload = function() {
    // Give the user hints for them to enter the data correctly for the "create a record" page
    inputValidation();
};

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
    var button = document.getElementById("btn");
    button.disabled = true;

    //Integer input validation
    var zip = document.getElementById("zipcode");
    testZipDigits();
    noEmptyFieldsCheck();
    document.getElementById("zip_hint").style.display = "none";
    zip.addEventListener("keyup", testZipDigits);
    document.getElementById("my_container").addEventListener("click", testZipDigits);

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
    document.getElementById("my_container").addEventListener("click", noEmptyFieldsCheck);

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
        button.disabled = btnTest;
    }
}

