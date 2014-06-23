
  var oGather=$("#gather");
  var categroy=$("#categroy");
function gather(t_url,typestr)
{

    categroy=$("#categroy");
    $.ajax({
        type:"GET",
        url:"gather.php",
        dataType:"json",
        timeout:6000,
        cache:false,
        data:"categroy_name="+encodeURIComponent(typestr)+"&time="+(new Date().getTime())+"&url="+t_url,
        success:function(msg){
          console.log(msg);
            var otable=$("#gather").parent();
            $("tbody").remove();
            var i=0,
            len=0,
            oTbody=$('<tbody id="gather"><tbody>');
            oGather.obj=msg;

            for(i,len=msg.length;i<len;i++)
            {
                var tr=$("<tr id='"+msg[i].id+"' data-img='"+msg[i].url+"' >");
                var td=$("<td></td>");
                td.append(categroy.clone());
                tr.append(td);
                td=$("<td>");
                td.append($("<a target='_blank' href='http://item.taobao.com/item.htm?id="+msg[i].id+"'>"+msg[i].name+"</a>"));
                tr.append(td);
                td=$("<td onclick='Edit(this);' >"+msg[i].dis+"</td>");
                tr.append(td);
                td=$("<td>"+msg[i].price+"</td>");
                tr.append(td);
                td=$("<td>"+msg[i].market_price+"</td>");
                tr.append(td);
                td=$('<td>&nbsp; <a href="javascript:;" onclick="Delete(this);"><i class="icon-trash"></i> 删除</a> &nbsp;&nbsp;<a href="javascript:;" onclick="GatherOne(this);"><i class="icon-cloud"></i> 采集</a></td>');
                tr.append(td);
                oTbody.append(tr);
            }

            otable.append(oTbody);
            $("tbody[id!=gather]").remove();
            $("tr").hover(
               function()
               {
                 OnTrOver($(this),$(this).attr("data-img"));
               },
               function()
               {
                OnTrOut();
               }
               );
             $("td select[name=categroy_id]").select2();
            $("td select[name=categroy_id]").removeAttr("id");
            $("td div.hide").removeClass("hide");
            for(var i=0,leng=msg.length;i<leng;i++)
            {
                $("td select[name=categroy_id]").eq(i).select2("val",msg[i].categroy);
            }
            console.log(msg.length);

            $("td select[name=categroy_id]").on("change",function(e){

                   var t_id= $(this).parents("tr").eq(0).attr("id");
                   for(var key in oGather.obj)
                   {
                       if( oGather.obj[key].id==t_id)
                       {
                            oGather.obj[key].categroy=e.val;
                            break;
                       }
                   }
            });

        },
        complete:function(msg)
        {
          console.log(msg);
        }
    });
}
oGather.un=272;
function OnTrOver(obj,url)
{
    obj=$(obj);
      oGather.sub=obj;
    var hideimg=$(".hideimg"),
        oTop=obj.position();
        hideimg.stop(true);
        hideimg.find("img").eq(0).attr("src",url);
    hideimg.show();
    hideimg.animate({top:(oTop.top-oGather.un)+"px"},300);
}
function OnTrOut()
{
    $(".hideimg").hide();
}

function Edit(obj)
{
    obj=$(obj);

    if(obj.has("input").length)
    {
           obj.find("input").eq(0)[0].focus();
           return false;
    }
    obj.html("<input onblur='Save(this);' type='text' value='"+obj.text()+"'>");
    obj.find("input").eq(0)[0].focus();
}
function Save(obj)
{
    obj=$(obj);
    var parent=obj.parent();
    var tr_id=parent.parent().attr("id");
    parent.html(obj.val());
    for(var key in oGather.obj)
    {
        if(oGather.obj[key].id==tr_id)
        {
            oGather.obj[key].dis=obj.val();
            return true;
        }
    }

}

function Delete(obj)
{
    obj=$(obj);
     var parent=obj.parent();
      var tr_id=parent.parent().attr("id");
      for(var key in oGather.obj)
    {
        if(oGather.obj[key].id==tr_id)
        {
            //oGather.obj[key]=null;
            delete oGather.obj[key];
            break;
        }
    }
    parent.parent().css("background","#C5ECD8");
    parent.parent().slideUp("fast",function(){
        $(this).remove();
    });

}

function GatherOne(obj)
{
     obj=$(obj);
     obj.attr("onclick","");
     obj.css("color","#28b779");
     obj.click(function(){
        return false;
     });
     obj.html('<i class="icon-cloud"></i> 采集中...');
     var gathers="";
     var parent=obj.parent();
      var tr_id=parent.parent().attr("id");
        for(var key in oGather.obj)
        {
            if(oGather.obj[key].id==tr_id)
            {
                gathers=oGather.obj[key];
                break;
            }
        }
        gathers=JSON.stringify(gathers);
        gathers=gathers.replace(/&/g,"%%%");
    $.ajax({
        type:"POST",
        dataType:"json",
        url:"gather.php",
         timeout:6000,
        cache:false,
        data:"act=gatherOne&data="+gathers,
        success:function(msg){

            if(msg.error=="ok")
            {
                     obj.css("color","#28b779");
                     parent.parent().css("background","#C5ECD8");
                      obj.click(function(){
                      return false;
                        });
                    obj.text("已采集");
                    console.log(msg.msgs);
            }
            else
            {
                alert(msg.msgs);
            }
        },
        complete:function(msg)
        {
          console.log(msg);
        }
    });
}

