<?php
    header('Content-Type:text/html; charset=utf-8');

    // form요소를 이용하여 GET방식으로 전달된 데이터 방식
    $name  = $_GET['name'];
    $email = $_GET['email'];

    //echo " $name 님이 회원으로 동록되었습니다. : $email";

    //echo 문자열을 기존 웹문서 [ 04_noAjax.html ] 과 같은 모양이 아니도록..
    // echo ("
    // <!DOCTYPE html>
    // <html>
    //     <head> 
    //         <meta charset='utf-8'>
    //         <title>No AJAX</title>
    //     </head>
    //     <body>
            
    //         <h3>회원가입 페이지</h3>
    
    //         <form action='./04_noAjax.php' method='get'>
    //             <input type='text' name='name' placeholder='이름'>
    //             <input type='text' name='email' placeholder='이메일'>
    
    //             <input type='submit' value='회원가입'>
    //         </form>
    
    //         <hr>
    //         <textarea id='ta' cols='30' rows='3'>$name 님이 등록하셨습니다.</textarea>
    
    //     </body>
    // </html>
    // ")

?>

<!-- php 영역밖에 있는면 무조건 echo -->
<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title>No AJAX</title>
    </head>
    <body>
        
        <h3>회원가입 페이지</h3>

        <form action="./04_noAjax.php" method="get">
            <input type="text" name="name" placeholder="이름">
            <input type="text" name="email" placeholder="이메일">

            <input type="submit" value="회원가입">
        </form>

        <hr>
        <textarea id="ta" cols="30" rows="3"> <?php  echo "$name 님이 등록했음 : $email";   ?> </textarea>

    </body>
</html>