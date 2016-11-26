var baseUrl= "http://localhost/ci_survey/";
(function(){
        var place=window.location;
        var pages = place.href;
        var divided=pages.split("/");
        var currentPage=divided[4];
        $(".nav").find(".active").removeClass('active');
        $("#"+currentPage).addClass('active');
    }

)();

$("#add_title_btn").click(function(){
    var text_area='<label for="description">Description</label><textarea class="form-control" name="description" id="description" required></textarea>';
   $(".newSurvey").html("<input type='text' class='form-control' name='title' placeholder='Title' required><br>"+ text_area +"<br><div id='questions_area'></div> <button type='button' class='add_questions_btn' class='btn btn-default' rel='1'>Add Questions</button><button type='submit' id='SurveySubmit' name='submit'>Submit</button>");
});
$(document).on('click','.add_questions_btn',function(){
    var counter=$(this).attr('rel');
    var newDiv="<div id='qd_"+counter+"'> </div>";
    var addQuestion="<div class='input-group'><input type='text' class='form-control' name='q_"+counter+"'id='q_"+counter+"' placeholder='Question' required> <span class='input-group-addon'><i id='del_"+counter+"' class='delete_question fa fa-minus-circle' aria-hidden='true' rel='"+counter+"'></i></span></div>  <br>";
    var type='<div id="questionType_'+counter+'" class="questionType">'
        +'<label class="form-check-inline mt5px"><input type="radio" name="questionType_'+counter+'" value="Text Box" rel="'+counter+'" class="question_type form-check-input" id="type_'+counter+'" required> Text Box</label>'
        +'<label class="form-check-inline mt5px"><input type="radio" name="questionType_'+counter+'" value="Text Area" rel="'+counter+'" class="question_type form-check-input" id="type_'+counter+'" required> Text Area</label>'
        +'<label class="form-check-inline mt5px"><input type="radio" name="questionType_'+counter+'" value="Radio" rel="'+counter+'" class="question_type form-check-input" id="type_'+counter+'" required> Radio</label>'
        +'<label class="form-check-inline mt5px"><input type="radio" name="questionType_'+counter+'" value="Check Box" rel="'+counter+'" class="question_type form-check-input" id="type_'+counter+'" required> Check Box</label>'
        +'</div>';

    $("#questions_area").append(newDiv);
    $("#qd_"+counter).append(addQuestion);
    $("#qd_"+counter).append(type);
    counter++;
    $(".add_questions_btn").attr('rel',counter);

});
$(document).on("change",".question_type",function(){
    var counter = $(this).attr('rel');
    if($(this).val()== "Radio" || $(this).val()== "Check Box")
    {
        $("#options_"+counter).remove();
        var Options="<input  type='text' name='v_"+counter+"'id='o_"+counter+"' placeholder='Options' required>";
        $("#questionType_"+counter).append("<div id='options_"+counter+"' class='options_area'><div id='optionsInputs_"+counter+"' class='op_inputs'></div> <div id='optionsBTN_"+counter+"' class='op_add_btn'></div> </div>");
        $('#optionsInputs_'+counter).append(Options);
        $('#optionsBTN_'+counter).append("<button type='button' id='1' class='add_options_btn' class='btn btn-default' rel='"+counter+"'>Add Options</button>");
    }
    else
    {
        $("#options_"+counter).remove();
    }

});
$(document).on("click",".add_options_btn",function(){
    var counter = $(this).attr('rel');
    var option_ount = $(this).attr('id');
    var Options="<input type='text' name='v_"+counter+"'id='o_"+counter+"_"+option_ount+"' placeholder='Options' required><i id='del_"+counter+"_"+option_ount+"' class='delete_option fa fa-minus-circle' aria-hidden='true' rel='"+counter+"_"+option_ount+"'></i> \n";
    $('#optionsInputs_'+counter).append(Options);
    option_ount++;
    $(this).attr('id',option_ount);

});
$(document).on("click",".delete_option",function(){
    var thisRel = $(this).attr('rel');
    var divided = thisRel.split('_');
    var counter = divided[0];
    var option_ount = divided[1];
    $('#o_'+counter+"_"+option_ount).remove();
    $(this).remove();
});

$(document).on("click",".delete_question",function(){
    var counter = $(this).attr('rel');
    $('#qd_'+counter).remove();
    $(this).remove();
});
$( "#SurveyForm" ).submit(function( event ) {
    console.log( $( this ).serializeArray());
    event.preventDefault();
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/new_survey",{formData:formData},function(response){
        if(response)
        {
            alert(response);
        }
    });
});
$( "#add_vendor" ).submit(function( event ) {
    event.preventDefault();
    console.log( $( this ).serializeArray());
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/new_vendor",{formData:formData},function(response){
        if(response)
        {
            alert(response);
        }
    });
});