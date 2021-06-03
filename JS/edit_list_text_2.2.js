var edit_list_text =() => $('div>ul>li').html(function(index, text ){
    return text.replace(/[^\d\.\,\'\<\>uli]/g,'')
});

