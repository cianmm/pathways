$(document).ready(function() {

    $.fn.peity.defaults.pie = {
  delimiter: null,
  diameter: 16,
  fill: ["#ff9900", "#fff4dd", "#ffd592"],
  height: null,
  width: null
}

    $("span.pie").peity("pie");

});


function validateAddGoalsForm() {
    console.log("hi");

    var goalForm = $('.add-goal-form');
    
    console.log(goalForm.find('[name="title"]').val());
    
    return false;
}