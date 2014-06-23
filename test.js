function FileSelect()
{
	var file=document.getElementById("test").files;
    for (var i = file.length - 1; i >= 0; i--) {
    	console.log(file[i].size);
    	console.log(file[i].name);
    	console.log(file[i].type);
    };

	console.log(file.length);

}

function UploadFile()
{
	 var http=new XMLHttpRequest();
	 var fd=new FormData(document.getElementById("form"));

	 /* event listners */
	 http.upload.addEventListener("progress",UploadProgress, false);
	 http.addEventListener("load",Load,false);
	 http.addEventListener("abort",Abort,false);
	 http.addEventListener("error",Error,false);

	 //send
	 http.open("post","test.php");
	 http.send(fd);


}

function UploadProgress(evt)
{
  if (evt.lengthComputable) {
    var percentComplete = Math.round(evt.loaded * 100 / evt.total);
    document.getElementById('num').innerHTML = percentComplete.toString() + '%';
  }
  else {
    document.getElementById('num').innerHTML = 'unable to compute';
  }
}
function Load()
{

}
function Abort(){};
function Error(){};