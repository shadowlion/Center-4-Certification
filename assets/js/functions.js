$(document).scroll(function() {
    var wScroll = $(this).scrollTop();
    if (wScroll >= 544) {
        $('nav').addClass('bg-faded').css('box-shadow','0 1px 1px #888');
    }
    else {
        $('nav').removeClass('bg-faded').css('box-shadow','none');
    }
});

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
