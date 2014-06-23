function Edit(id)
{
	$("#save").unbind('click');
    $("#save").click(function(){PostEdit();});
    Wait();
    $(".hidiv").fadeIn(500);

    CallAjax("POST","json","ajax.php","act=get_focus_info&id="+id,function(msg){
    	SetHidiv(msg.str.id,
                         msg.str.pic_url,
                         msg.str.click_url,
                         msg.str.pic_dis,
                         msg.str.pic_index,
                         msg.str.title
                    );
        $("#show_img").attr("src",msg.str.pic_url);
    });


}


function Canel()
{
    $("#save").attr("disabled",true);
    $(".hidiv").fadeOut(500,function(){
         $("#save").removeAttr("disabled");
    });
}





function Wait()
{
    SetHidiv("","正在获取数据...","正在获取数据...","正在获取数据...","正在获取数据...","");
    $("#img_url").attr("src","");
}

function SetHidiv(id,pic_url,click_url,pic_dis,pic_index,title)
{
	console.log(id+":"+pic_url);
    $("#pic_id").val(id);
     $("#pic_url").val(pic_url);
      $("#click_url").val(click_url);
      $("#pic_dis").val(pic_dis);
        $("#pic_index").val(pic_index);
           $("#img_url").attr("src",pic_url);
             $("#title").val(title);

}

function ClearAll(){
    if(!confirm("确定要清除全部导航吗?"))
    {
        return false;
    }
    CallAjax("post","json","ajax.php","act=focus_clear_all",function(){


                $("tbody").remove();
                $(".dataTables_paginate").remove();

    });
}


function FocusAdd()
{
    SetHidiv("add","","","",0,"");
    $(".hidiv").fadeIn(500);
    $("#save").unbind('click');
    $("#save").click(function(){PostAdd();});
}



function PostAdd()
{
    var id=$("#pic_id"),
        pic_url=$("#pic_url"),
        click_url=$("#click_url"),
        pic_dis=$("#pic_dis"),
        pic_index=$("#pic_index"),
        title=$("#title");
        ;
        if(pic_url.val().length==0||click_url.val().length==0||pic_dis.val().length==0||pic_index.val().length==0)
        {
            alert("请填写全部");
            return false;
        }
        Canel();
    var code=encodeURI("act=focus_add&pic_url="+pic_url.val()+"&click_url="+click_url.val()+"&pic_dis="+pic_dis.val()+"&pic_index="+pic_index.val()+"&title="+title.val());
    if(id.val()=="add")
    {
       CallAjax("post","json","ajax.php",code,function(){
       	window.location.reload();
       });
    }
}

function PostEdit()
{
       var id=$("#pic_id"),
        pic_url=$("#pic_url"),
        click_url=$("#click_url"),
        pic_dis=$("#pic_dis"),
        pic_index=$("#pic_index"),
        title=$("#title");
        if(pic_url.val().length==0||click_url.val().length==0||pic_dis.val().length==0||pic_index.val().length==0)
        {
            alert("请填写全部");
            return false;
        }
        Canel();
    var code=encodeURI("act=focus_edit&pic_url="+pic_url.val()+"&click_url="+click_url.val()+"&pic_dis="+pic_dis.val()+"&pic_index="+pic_index.val()+"&id="+id.val()+"&title="+title.val());
    if(/^\d+$/.test(id.val()))
    {
       	 CallAjax("post","json","ajax.php",code,function(){
       	window.location.reload();
       });
    }
}


function Focus_Delete(id,obj)
{
   var obj=$(obj);
	if(!confirm('确定要删除该导航吗'))
        {
            return false;
        }
        	 CallAjax("post","json","ajax.php","act=focus_delete&id="+id,function(msg){
        	 	  obj.parents("tr").eq(0).remove();
        	 });
}


$(document).ready(function(){
  $("#alogo").eq(0).hover(function(){
    $(".logo-pic").slideDown(300);

  },function(){
      $(".logo-pic").slideUp(300);

  });
  ReAddAclick();
});



//upload

function ImageUpLoad()
{

    ClearAclick();

    var form=$("#img_form"),
        file=$("#img_file");
    if(file[0].files.length==0)
    {
        ReAddAclick();
      alert("请选择需要上传的图片！");
      return false;
    }

    //进行文件判断
    file=file[0].files[0];
    var rFilter = /^(image\/bmp|image\/gif|image\/jpeg|image\/png)$/i;
    if(rFilter.test(file.type)&&file.size<(4096*1024))
    {

        //进行上传操作

        var http=new XMLHttpRequest();

        http.upload.addEventListener("progress",UploadProgress,false);

        http.addEventListener("abort",UploadAbort,false);


        http.addEventListener("load",UploadFinish,false);

        http.addEventListener("error",UploadError,false);



        var fd=new FormData();
         fd.append("fileToUpload", document.getElementById('img_file').files[0]);
        console.log(fd);
        http.open("post","post.php?act=upload_image");
        http.send(fd);

    }
    else
    {
      alert("请确保您上传的图片格式为 bmp|gif|jpg|jpeg|png,并且大小小于4M");
    }

    return false;
}

function UploadProgress(e)
{
   if (e.lengthComputable) {
        iBytesUploaded = e.loaded;
        iBytesTotal = e.total;
        var iPercentComplete = Math.round(e.loaded * 100 / e.total);

        $(".bar").css("width",iPercentComplete.toString()+"%");
        if (iPercentComplete == 100) {

        }
    } else {

    }
}
function UploadAbort(e)
{
     console.log(e);
    ReAddAclick();
}
function UploadFinish(e)
{
     ReAddAclick();
     $("#pic_url").val(e.target.responseText);
     $("#show_img").attr("src",e.target.responseText);
}
function UploadError(e)
{
     console.log(e);
    ReAddAclick();
}

function ClearAclick()
{
    $("#up_img").unbind('click');
}
function ReAddAclick()
{
     $("#up_img").unbind('click');
      $("#up_img").click(function(){
        ImageUpLoad();
      });
}