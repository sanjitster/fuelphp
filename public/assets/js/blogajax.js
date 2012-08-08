// ExampleAjax
// ++++++++++++++++++++++++++++++++++++++++++

$(function(){

    var deb = function(d){
        console.debug(d);
    }

    $('form.well').submit(function(form){

        form.preventDefault();

        $('div.error').css('display','none');

        $.post(
            this.action,
            $(this).serialize(),
            function(response){

                if(response.status === true){

                    alert('You loged in!');

                }else{

                    //deb(response);
                    $('div.error').fadeIn();
                    $('.validation').text('');

                    response.validation.username && $('#val-username').text(response.validation.username);
                    response.validation.password && $('#val-password').text(response.validation.password);

                }
            },
            'json'

        ).error(function(){ alert('error'); })

    });

});