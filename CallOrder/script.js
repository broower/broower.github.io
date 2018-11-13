$("#form-name").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});


function submitForm(){
    // Initiate Variables With Form Content
    var formData $("#form-name").serializeObject();
    
 
    $.ajax({
        type: "POST",
        url: "CallOrder/email.php",
        data: formData,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#alert" ).removeClass( "sp-clear" );
}