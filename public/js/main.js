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

});





