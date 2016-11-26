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
			location.reload();
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
			location.reload();
        }
    });
});
$( "#survey_answer" ).submit(function( event ) {
    event.preventDefault();
    console.log( $( this ).serializeArray());
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/submit_answer",{formData:formData},function(response){
        if(response)
        {
            alert('Successfully Answerd');
			window.location = baseUrl+"user/given_survey_list";
			
        }
    });
});
$( "#add_category_form" ).submit(function( event ) {
    event.preventDefault();
    console.log( $( this ).serializeArray());
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/add_category",{formData:formData},function(response){
        if(response)
        {
            alert(response);
            location.reload();
        }
    });
});
$( "#add_sub_category_form" ).submit(function( event ) {
    event.preventDefault();
    console.log( $( this ).serializeArray());
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/add_sub_category",{formData:formData},function(response){
        if(response)
        {
            alert(response);
            location.reload();
        }
    });
});
$( "#turn_off" ).submit(function( event ) {
    event.preventDefault();
    console.log( $( this ).serializeArray());
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/turn_off",{formData:formData},function(response){
        if(response)
        {
            alert(response);
            location.reload();
        }
    });
});
$("#change_password").change(function () {
    var pass=$("#change_password").val();
    var confirm_pass=$("#confirm_change_password").val();
    if(pass === confirm_pass){
        $("#pass_not_matched").hide();
        $("#pass_matched").show();
        $("#edit_admin_profile").enable();

    }else {
        $("#pass_not_matched").show();
        $("#pass_matched").hide();
        $("#edit_admin_profile").disable();
    }
});
$("#confirm_change_password").change(function () {
    var pass=$("#change_password").val();
    var confirm_pass=$("#confirm_change_password").val();
    if(pass === confirm_pass){
        $("#pass_not_matched").hide();
        $("#pass_matched").show();
        $("#edit_admin_profile").enable();
    }else {
        $("#pass_not_matched").show();
        $("#pass_matched").hide();
        $("#edit_admin_profile").disable();
    }
});
$("#edit_admin_profile").click(function () {
    var pass=$("#change_password").val();
    var confirm_pass=$("#confirm_change_password").val();
    if(pass === confirm_pass && pass != ''){
        var id=$("#admin_id_input").val();
        $.post(baseUrl+"ajax/change_admin_pass",{pass:pass,id:id},function(response){
            if(response)
            {
                alert(response);
                location.reload();
            }
        });
    }else{
        alert("Password not matched");
    }
});
$("#edit_vendor_profile").click(function () {
    var pass=$("#change_password").val();
    var confirm_pass=$("#confirm_change_password").val();
    var name='';
    var name=$("#vendor_name_input").val();
    console.log(name);
    var id=$("#vendor_id_input").val();
    if(pass === confirm_pass && pass != ''){

        $.post(baseUrl+"ajax/update_vendor",{pass:pass,id:id,name:name},function(response){
            if(response)
            {
                alert(response);
                location.reload();
            }
        });

    }else if(name != ''){
        $.post(baseUrl+"ajax/update_vendor",{id:id,name:name},function(response){
            if(response)
            {
                alert(response);
                location.reload();
            }
        });

    }else{
        alert("Update failed");
    }
});

$(".vendor_turn_on_off").click(function () {
    var state=$(this).html();
    var id=$(this).attr('rel');
    console.log(state +"_"+ id);

    if(id != '' && state == 'Turn Off'){
        $.post(baseUrl+"ajax/survey_turn_on_off",{id:id,type:'off'},function(response){
            if(response)
            {
                alert(response);
                $(this).html('Turn On');
                // location.reload();
            }
        });
    }else if(id != '' && state == 'Turn On'){
        $.post(baseUrl+"ajax/survey_turn_on_off",{id:id,type:'on'},function(response){
            if(response)
            {
                alert(response);
                $(this).html('Turn Off');
                // location.reload();
            }
        });
    }else{
        alert("Failed");
    }
});

$("#edit_user_profile").click(function () {
    var pass=$("#change_password").val();
    var confirm_pass=$("#confirm_change_password").val();
    var name='';
    var name=$("#user_name_input").val();
    console.log(name);
    var id=$("#user_id_input").val();
    if(pass === confirm_pass && pass != ''){

        $.post(baseUrl+"ajax/update_user",{pass:pass,id:id,name:name},function(response){
            if(response)
            {
                alert(response);
                location.reload();
            }
        });

    }else if(name != ''){
        $.post(baseUrl+"ajax/update_user",{id:id,name:name},function(response){
            if(response)
            {
                alert(response);
                location.reload();
            }
        });

    }else{
        alert("Update failed");
    }
});
$("#category_select").change(function () {
    var cat=$("#category_select").val();
    console.log(cat);
    if(cat != 0 && cat != '')
    {
        $.post(baseUrl+"ajax/getCatNSurveyWithCatID",{cat_id:cat},function(response){
            if(response)
            {
                var data=JSON.parse(response);
                // alert(response);
                $("#sub_category_select").html(data.options);
                $(".panel-body").html(data.survey_list);
                //location.reload();
            }
        });
    }
});
$("#sub_category_select").change(function () {
    var cat=$("#sub_category_select").val();
    console.log(cat);
    if(cat != 0 && cat != '')
    {
        $.post(baseUrl+"ajax/getSubCatNSurveyWithSubCatID",{sub_cat_id:cat},function(response){
            if(response)
            {
                var data=JSON.parse(response);
                // alert(response);
                //$("#sub_category_select").html(data.options);
                $(".panel-body").html(data.survey_list);
                //location.reload();
            }
        });
    }
});
$( "#search_survey" ).submit(function( event ) {
    event.preventDefault();
    console.log( $( this ).serializeArray());
    var formData=$( this ).serializeArray();
    $.post(baseUrl+"ajax/search_survey",{formData:formData},function(response){
        if(response)
        {
            // alert(response);
            $(".panel-body").html(response);
        }
    });
});

$(".userToRate").click(function () {

    var rating=0;
    var thisRel = $(this).attr("rel");
    $(this).rateYo()
        .on("rateyo.set", function (e, data) {
            console.log(data.rating);
            $.post(baseUrl+"ajax/setRating",{rating:data.rating,survey_id:thisRel},function(response){
                if(response)
                {
                    alert(response);
                }
            });
        });
    console.log(rating);
    $(this).rateYo("option", "readOnly", true);



    console.log("Its " + rating + " Yo!"+ thisRel);
});
$(document).ready(function () {
	$(".rateyoS7").each(function () {
        $(this).rateYo("rating",0);
		$(this).rateYo("option", "readOnly", true);
      
    });
});
$(document).ready(function () {

    var values=$("#rating_result").html();

    var singleVal=values.split(',');

    var i=0;
    $(".rateyoS7").each(function (v) {
        $(this).rateYo("rating",0);
        i++;
    });
    var j=0;
    for(j=0;j<singleVal.length;j++){
        var survey_idNRating=singleVal[j].split('_');
        $('#rating_'+survey_idNRating[0]).rateYo("rating",survey_idNRating[1]);
    }
    $(".rateyoS7").rateYo("option", "readOnly", true);

});