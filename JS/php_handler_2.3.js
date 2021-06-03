$(document).ready(function(){
    $('#form1').submit(function(event){
        event.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function(result){
                alert(result);//'Функция работает',
            }
        })
    });
});