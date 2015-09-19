/**
 * Created by tsc on 9/12/15.
 */

$(document).ready(function(){

    //check all select box
    $("#selectall").click(function () {
        var checkAll = $("#selectall").prop('checked');
        if (checkAll) {
            $(".did").prop("checked", true);
        } else {
            $(".did").prop("checked", false);
        }
    });

    //delete click
    $('.btn-delete').click(function(){
        var Ids = [];
        $('.did:checked').each(function(){
            Ids.push($(this).attr("value"));
        });

        if(Ids.length > 0){
            $.ajax({
                url: baseUrl+'/'+basePath+'/delete',
                type: "post",
                data: {'ids': Ids},
                success: function(data){
                    alert('Delete successfully.');
                    location.reload();
                }
            });
        }else{
            alert('You should select one.');
        }
    });

    //check image input
    $('input[name=image]').change(function(){
        $('#postImage').trigger('submit');
    });

    //show image after select
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });

    //convert to slug
    $("#name").keyup(function(){
        var str = sansAccent($(this).val());
        str = str.replace(/[^a-zA-Z0-9\s]/g,"");
        str = str.toLowerCase();
        str = str.replace(/\s/g,'-');
        $("#permalien").val(str);
    });

});

//convert to slug
function sansAccent(str){
    var accent = [
        /[\300-\306]/g, /[\340-\346]/g, // A, a
        /[\310-\313]/g, /[\350-\353]/g, // E, e
        /[\314-\317]/g, /[\354-\357]/g, // I, i
        /[\322-\330]/g, /[\362-\370]/g, // O, o
        /[\331-\334]/g, /[\371-\374]/g, // U, u
        /[\321]/g, /[\361]/g, // N, n
        /[\307]/g, /[\347]/g // C, c
    ];
    var noaccent = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'];
    for(var i = 0; i < accent.length; i++){
        str = str.replace(accent[i], noaccent[i]);
    }
    return str;
}





