<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="login.css">

<div class="container-login">
    <div class="header-login">
        <div class="header-login-box">
            <span class="header-text-position">
                <a href="#">&nbsp;<i class="fa fa-user-plus"></i>&nbsp;&nbsp;Register</a>
            </span>
            <a href="#"><i class="fa fa-question"></i>&nbsp;&nbsp;Forgot Password?</a>
        </div>
    </div>
    <form action="register.php" method="POST" enctype="multipart/form-data">
        <div class="login-box">
            <div class="login">
                <h1>Authentication</h1>
                <p style="background-color: red;" id="respons_message"> 
                <?php
                    // if($_SERVER['QUERY_STRING']){
                    //    $message = str_replace('%20',' ',$_SERVER['QUERY_STRING']);
                    //     echo $message;
                    // }
                    // if(isset($_COOKIE['message']))
                    // {
                    //     echo $_COOKIE['message'];
                    // }
                ?>
                </p>
                <input id="username" type="text" name='username' placeholder="Username" />
                <label for="username" class="login-input-icon">
                    <i class="fa fa-user"></i>
                </label>
                <input id="password" type="password" name='password' placeholder="Password" />
                <label for="password" class="login-input-icon">
                    <i class="fa fa-lock"></i>
                </label>
                <input id="input_email" type="text" name='email' placeholder="email" />
                <label for="email" class="login-input-icon">
                    <i class="fa fa-lock"></i>
                </label>
                <!-- <input type="file" name='profilepic' id='profilepic'> -->
                <label class="login-checkbox">
                    <select name="gender" >
                        <option value="F">Female</option>
                        <option value="M">Male</option>
                    </select>
                </label>
                <button type="submit" id="submit">Register</button>
                <span class="login-separator"></span>
                <div class="login-social-media">
                    <img src="https://i.imgur.com/VnezlZf.png" alt="Facebook" width="50px" height="50px">
                    <img src="https://i.imgur.com/yZteilF.png" alt="Linkedin" width="50px" height="50px">
                    <img src="https://i.imgur.com/WsrXQ6U.png" alt="Twitter" width="50px" height="50px">
                </div>
            </div>
        </div>
    </form>
</div>



<script>
    document.getElementById('submit').addEventListener('click',sendRegisterData);
    function sendRegisterData(e){
        e.preventDefault();
        let input = document.querySelectorAll('input');
        let gender = document.getElementsByName('gender')[0].value;
        let username = input[0].value;
        let password = input[1].value;
        let email = input[2].value;

        var xmlHttp = new XMLHttpRequest();
        let form_data = `gender=${gender}&username=${username}&password=${password}&email=${email}`;
        xmlHttp.open( "GET", `https://localhost/phpMysql/register.php?${form_data}`, false ); // false for synchronous request
        xmlHttp.send( );

        console.log(xmlHttp.responseText);

        // return xmlHttp.responseText;


        //   $.ajax({
        //     type: 'post',
        //     url: 'https://localhost/phpMysql/register.php',
        //     data: {
        //         'gender': gender,
        //         'username': username,
        //         'password': password,
        //         'email': email,
        //     },
        //     success: function(data, status) {
        //         if(data == 'user created succeffully')
        //         {
        //             let response = document.getElementById('respons_message');
        //             response.textContent = data;
        //             response.style.background = 'green';

        //         }
            // }
        // });

    }
      

</script>