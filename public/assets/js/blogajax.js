// ExampleAjax
// ++++++++++++++++++++++++++++++++++++++++++

$(function(){

    $('form.well').submit(function(e){

        e.preventDefault();

        $.post(this.action, $(this).serialize(), function(data){

            $('div.error').css('display','none');

            if(data.status === true){

                alert('You loged in!');

            }else{
                //console.debug(data);

                $('div.error').fadeIn();

                $('.validation').text('');

                data.validation.username && $('#val-username').text(data.validation.username);
                data.validation.password && $('#val-password').text(data.validation.password);

            }

        },'json').error(function(){

            alert('error');

        })

    });

});