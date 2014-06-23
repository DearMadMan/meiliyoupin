
function Open(id)
{

    Wait();
    $(".hidiv").fadeIn(500);
     $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=get_message_info&id="+id,
        success:function(msg){
            if(msg.error=="ok")
            {
                SetHidiv(msg.str.id,
                         msg.str.name,
                         msg.str.email,
                         msg.str.title,
                         msg.str.msg
                    );

            }
            else
            {
                alert(msg.error);
            }
        },
        complete:function(msg)
        {
         //  console.log(msg);
        }
    });
}



function SetHidiv(id,name,email,title,msg)
{
    $("#nav_id").val(id);
     $("#name").val(name);
      $("#email").val(email);
      $("#title").val(title);

        $("#msg").val(msg);

}
function Wait()
{
    SetHidiv("","正在获取数据...","正在获取数据...","正在获取数据...","正在获取数据...");
}

function NavCanel()
{

    $(".hidiv").fadeOut(500,function(){

    });
}





function Message_Delete(id,obj)
{
    if(!confirm('确定要删除该留言吗'))
        {
            return false;
        }

    $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=message_delete&id="+id,
        success:function(msg){
            if(msg.error=="ok")
            {

                $(obj).parents("tr").eq(0).remove();
            }
            else
            {
                alert(msg.error);
            }
        },
        complete:function(msg)
        {
          // console.log(msg);
        }
    });
}

