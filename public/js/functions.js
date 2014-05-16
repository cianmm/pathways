$(document).ready(function() {

    $("span.pie").peity("pie");
    
    
    /*
     * Validation for our login/register forms
     *
     */
    $(".email-input").on("keyup", validateEmail);
    
    
    
    /*
     * Validation for our Add Goal forms
     */
     $("#goal_title").on("keyup", validateGoalTitle);
     $("#goal_complete").on("keyup", validateNumber);
     $("#goal_value").on("keyup", validateNumber);

});

/*
 * Validation
 *
 */
 
var goal_title_is_valid = false;
var goal_complete_is_valid = false;

function checkIfAllValid()
{
    if (goal_title_is_valid === true && goal_complete_is_valid === true)
    {
        return true;
    }
    
    return false;
}
 
function disableSubmitButton(input, disable) 
{
        
    if (disable === true)
    {
        input.parent().find("#create-goal").attr("disabled","disabled");
    }
    else if (disable === false && checkIfAllValid())
    {
        input.parent().find("#create-goal").removeAttr("disabled");
    }
}

function validateEmail() 
{

    var email = $(this);
    
    //regex from http://stackoverflow.com/questions/2507030/email-validation-using-jquery
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!regex.test(email.val()))
    {
        email.parent().addClass("has-error");
    }
    else
    {
        email.parent().removeClass("has-error").addClass("has-success");
    };
}

function validateGoalTitle() 
{
    var input = $(this);
    var input_div = input.parent();
    
    if (input.val().length < 5)
    {
        //mark the item as a failure
        input_div.addClass("has-error");
        goal_title_is_valid = false;
        //disable the submit button
        disableSubmitButton(input_div, true);
    }
    else if (input.val().length >= 5)
    {
        // mark the item as successful
        input_div.removeClass("has-error").addClass("has-success");
        goal_title_is_valid = true;
        // reenable the submit button
        disableSubmitButton(input_div, false);
    };
    
}

function validateNumber() {
    var input = $(this);
    var input_div = $(this).parent();
    
    if (!$.isNumeric(input.val()))
    {
        input_div.addClass("has-error");
        goal_complete_is_valid = false;
        disableSubmitButton(input_div, true);
    }
    else
    {
        input_div.removeClass("has-error").addClass("has-success");
        goal_complete_is_valid = true;
        disableSubmitButton(input_div, false);
    }
    
}
