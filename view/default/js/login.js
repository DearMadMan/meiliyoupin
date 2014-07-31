      $(document).ready(function () {
        $('#loginForm').isHappy({
          fields: {
            '#user_name': {
              required: true,
              message: '用户名或email不能为空',

            },
            '#user_word': {
              required: true,
              message: '密码不能为空'
          
            }

          }
        });



      });
