$('#certTitle').change(function() {
    $("#certTypeConfirm").val(this.value); // this.value is enough for you
}).val($('#certTypeConfirm').val()).change(); // for pre-selection trigger

$("input[name='humanCheck']").change(function(){
    if(this.value == "human"){
        // console.log("human");
        $('#submitBtn').prop('disabled', false);
    }
    else {
        // console.log("bot detected");
        $('[data-toggle="tooltip"]').tooltip();
        $('#submitBtn').prop('disabled', true);
    }
});
