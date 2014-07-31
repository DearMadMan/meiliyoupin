      $(document).ready(function () {
        $('#registerForm').isHappy({
          fields: {
            '#inputEmail': {
              required: true,
              message: '请输入正确的Email地址',
              test:happy.email
            },
            '#inputusername': {
              required: true,
              message: '4-16个字符，不能以数字开头，由中文、英文或下划线组成',
              test:  happy.between ,
              arg:function(){
                var obj={};
                obj.min=4;
                obj.max=16;
                return obj;
              }
            },
            '#inputPassword1': {
              required: true,
              message: '请不要使密码低于6个字符！',
              test: happy.between,
             arg:function(){
                var obj={};
                obj.min=4;
                obj.max=16;
                return obj;
              }
            },
            '#inputPassword2': {
              required: true,
              message: '密码效验不一致！',
              test: happy.equal,
              arg:function(){
                return $("#inputPassword1").val();
              }
            }

          }
        });

      $("#getcode").click(function(){
        $(this).attr("src","getcode.php?time="+(new Date()).getTime());

      });

      });
