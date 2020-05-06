$('input').keydown(function(e) {

    function myFuc() {
        alert('Its a required field');
    }
    var code = e.keyCode || e.which;
    $(this).css('border','');

    if (code == '9')
	 {        
        if($(this).val()=='')
	{
        	 $(this).html(myFuc());
             $(this).css('border','1px solid red');
            $( this ).focus();
		e.preventDefault();
            return;
        }           
    }

 });