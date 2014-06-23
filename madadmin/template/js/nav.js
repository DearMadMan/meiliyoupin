function ClearAll(){
    if(!confirm("确定要清除全部导航吗?"))
    {
        return false;
    }
    $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=nav_clear_all",
        success:function(msg){
            if(msg.error=="ok")
            {
                console.log(msg.str);
                $("tbody").remove();
                $(".dataTables_paginate").remove();
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


function NavEdit(id)
{
    $("#save").unbind('click');
    $("#save").click(function(){PostEdit();});
    Wait();
    $(".hidiv").fadeIn(500);
     $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=get_nav_info&id="+id,
        success:function(msg){
            if(msg.error=="ok")
            {
                SetHidiv(msg.str.id,
                         msg.str.nav_name,
                         msg.str.nav_url,
                         msg.str.is_blank,
                         msg.str.z_index
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

function SetHidiv(id,nav_name,nav_url,is_blank,z_index)
{
    $("#nav_id").val(id);
     $("#nav_name").val(nav_name);
      $("#nav_url").val(nav_url);
      $("#is_blank").val(is_blank);
      if(is_blank==1)
      {
         $("#is_blank").attr("checked","checked");
         $.uniform.update();
      }
        $("#z_index").val(z_index);

}
function Wait()
{
    SetHidiv("","正在获取数据...","正在获取数据...","正在获取数据...","正在获取数据...");
}

function NavCanel()
{
    $("#save").attr("disabled",true);
    $(".hidiv").fadeOut(500,function(){
         $("#save").removeAttr("disabled");
    });
}

function NavAdd()
{
    SetHidiv("add","","",0,"");
    $("#is_blank").removeAttr("checked");
    $("#is_blank").val(0);
    $.uniform.update();
    $(".hidiv").fadeIn(500);
    $("#save").unbind('click');
    $("#save").click(function(){PostAdd();});
}

function PostEdit()
{
        var id=$("#nav_id"),
        nav_name=$("#nav_name"),
        nav_url=$("#nav_url"),
        is_blank=$("#is_blank"),
        z_index=$("#z_index");
        if(nav_name.val().length==0||nav_url.val().length==0||is_blank.val().length==0||z_index.val().length==0)
        {
            alert("请不要为空！");
            return false;
        }
        if(is_blank.parent().hasClass("checked"))
        {
            is_blank.val(1);
        }
        NavCanel();
    var code=encodeURI(nav_name.val()+"&nav_url="+nav_url.val()+"&is_blank="+is_blank.val()+"&z_index="+z_index.val());
    if(/^\d+$/.test(id.val()))
    {
        $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=nav_edit&id="+id.val()+"&nav_name="+code,
        success:function(msg){
           if(msg.error=="ok")
            {
                 window.location.reload();
            }
            else
            {
                alert(msg.error);
            }

        },
        complete:function(msg)
        {
          console.log(msg);
        }
    });
    }
}



function PostAdd()
{


    var id=$("#nav_id"),
        nav_name=$("#nav_name"),
        nav_url=$("#nav_url"),
        is_blank=$("#is_blank"),
        z_index=$("#z_index");
        if(nav_name.val().length==0||nav_url.val().length==0||is_blank.val().length==0||z_index.val().length==0)
        {
            alert("请不要为空！");
            return false;
        }
        if(is_blank.parent().hasClass("checked"))
        {
            is_blank.val(1);
        }
        NavCanel();
    var code=encodeURI(nav_name.val()+"&nav_url="+nav_url.val()+"&is_blank="+is_blank.val()+"&z_index="+z_index.val());
    if(id.val()=="add")
    {
        $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=nav_add&nav_name="+code,
        success:function(msg){
           if(msg.error=="ok")
            {
                 window.location.reload();
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
}


function Nav_Delete(id,obj)
{
    if(!confirm('确定要删除该导航吗'))
        {
            return false;
        }

    $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=nav_delete&id="+id,
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


function ChangeBox(id,obj)
{
    var ck=1;
    if($(obj).parent().hasClass("checked"))
    {
        ck=0;
    }

    console.log("act=nav_set_blank&id="+id+"&is_blank="+ck);
    $(obj).attr("disabled",true);
    $.ajax({
        type:"POST",
        dataType:"json",
        cache:false,
        url:"ajax.php",
        data:"act=nav_set_blank&id="+id+"&is_blank="+ck,
        success:function(msg){
            if(msg.error=="ok")
            {

            }
            else
            {
                alert(msg.error);
            }
        },
        complete:function(msg)
        {
         console.log(msg);
           $(obj).removeAttr("disabled");
        }
    });
}