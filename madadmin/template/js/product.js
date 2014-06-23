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
     $("#product_imgurl").val(e.target.responseText);
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