//Buscador de partners
(function ($) {

    // var schools = ['Express Learning Online', 'Centro Educativo Integral Delta', 'Otro', 'No aplica'];
    let references = [];
    $.ajax({
        url: "../php/register-certifications/searchReferrals.php",
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i < data.length; i++) {
                references.push(data[i].name);
            }
            // constructs the suggestion engine
            var schools = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                // `states` is an array of state names defined in "The Basics"
                local: references
            });

            $('#school .typeahead').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'schools',
                source: schools
            });
        },
        error: function (error) {
            console.error('Error al cargar datos:', error);
        }
    });
})(jQuery);

const typeaheadReference = document.getElementById('typeahead-reference');


typeaheadReference.addEventListener("change" , function(){
    let referenceValue = typeaheadReference.value;
    let certificationDiv = document.getElementById("certificationDiv");
    let studyDiv = document.getElementById("studyDiv")
    if (referenceValue == "No aplica") {
        certificationDiv.removeAttribute("hidden");
        studyDiv.removeAttribute("hidden");
    }else {
        certificationDiv.setAttribute("hidden", "");
        studyDiv.setAttribute("hidden", "");
    }
});

// function showInputs() {
    
// }




// var email = "example@example.com";
// if (validator.isEmail(email)) {
//     console.log("Valid email address");
// } else {
//     console.log("Invalid email address");
// }
