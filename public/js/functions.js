$(document).ready(function() {

    $("span.pie").peity("pie");

});


function validateAddGoalsForm() {
    console.log("hi");

    var goalForm = $('.add-goal-form');
    
    console.log(goalForm.find('[name="title"]').val());
    
    return false;
}