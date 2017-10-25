// MODULE
var angularApp = angular.module('angularApp', []);

// CONTROLLERS
angularApp.controller('Home', function($scope, $http, $window, $anchorScroll, $location) {

        /*
        * Function to capture a screenshot
        */
        /*setInterval(function capture(){
            $('#targetDiv').html2canvas({
                onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
                $('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
                document.getElementById("myForm").submit();
            }
        });
    }, 10000)*/

        setInterval(function gotoBottom() {


            // set the location.hash to the id of
            // the element you wish to scroll to.
            $location.hash('targetDiv');

            // call $anchorScroll()
            $anchorScroll();

            $('#primaryDiv').html2canvas({ 
                        onrendered: function (canvas) { 
                            var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");  // here is the most important part because if you dont replace you will get a DOM 18 exception.
                            var a = document.createElement('a');
                            a.href = image;

                            var today = new Date();

                            var yy = today.getFullYear();

                            var mm = today.getMonth();

                            var dd = today.getDate();

                            var hh = today.getHours();

                            var min = today.getMinutes();

                            var ss = today.getSeconds();

                            var name = "primaryDiv" + " " + yy + "-" + mm + "-" + yy + " " + hh + ":" + min + ":"+ ss +".png";
                            a.download = name;
                            a.click();            
                        }
                    }); 

            setTimeout(function() { 
                $location.hash('tertionaryDiv'); $anchorScroll(); 

                    $('#tertionaryDiv').html2canvas({ 
                        onrendered: function (canvas) { 
                            var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");  // here is the most important part because if you dont replace you will get a DOM 18 exception.
                            var a = document.createElement('a');
                            a.href = image;

                            var today = new Date();

                            var yy = today.getFullYear();

                            var mm = today.getMonth();

                            var dd = today.getDate();

                            var hh = today.getHours();

                            var min = today.getMinutes();

                            var ss = today.getSeconds();

                            var name = "tertionaryDiv" + " " + yy + "-" + mm + "-" + yy + " " + hh + ":" + min + ":"+ ss +".png";
                            a.download = name;
                            a.click();            
                        }
                    }); 

        }, 5000);

    }, 10000)
    
        window.addEventListener('hashchange', function(){

            console.log("Hash Changed!");

        });

    /*
    // Variable to hold request
    var request;

    // Bind to the submit event of our form
    $("#myForm").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "/screenshot/save.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Hooray, it worked!");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});*/
});