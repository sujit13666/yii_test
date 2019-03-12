$( document ).ready(function() {
    $("#hiddenTextField").hide();
    $("input[name='Inputs[radioButton]']").click(function () {
        if($("input[name='Inputs[radioButton]']:checked").val()=="b"){
            $("#hiddenTextField").show();
        }else{
            $("#hiddenTextField").hide();
        }
    })
});