$('input').keydown(function(e) {

    function myFuc() {
        alert('this field is required!');
    }
    var code = e.keyCode || e.which;
    $(this).css('border','');
    if (code == '9') {        
        if($(this).val()==''){
        	 $(this).html(myFuc());
             $(this).css('border','1px solid red');
            $( this ).focus();
            return;
        }           
    }

 });