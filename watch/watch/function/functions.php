<?php 
        function signup()
        {
            $sql = "insert into user values( 
                '".$_POST['signup_email']."',
                '".$_POST['signup_username']."',
                '".hashed($_POST['new_password'])."')";
            
                if(set_data($sql)){
                    echo "<script>window.location='index.php'</script>";
                }
        }

        function login()
        {
            $sql = "select password from user where email='".$_POST['login_email']."' ";
            $result=get_data($sql);
            $user = mysqli_fetch_assoc($result);
            if($user['password']==hashed($_POST['login_password'])){
                $_SESSION['email'] =$_POST['login_email'];
    
                echo "<script>window.location='index.php'</script> ";
            }else{
                echo "<div>Invalid Vredentials</div>";
            }
        }

        function hashed($password){
            $hashedpass = sha1(md5($password));
            return $hashedpass;
        }

        function signout()
        {
            unset($_SESSION['email']);
            echo "<script>window.location='index.php'</script>";
        }
        

        function movie_list(){
            $sql = "select Movie_id,name,coverimage,story_Line from moviedetails";
            $movies=get_data($sql);
            $count=0;
            while($movie=mysqli_fetch_assoc($movies)){
                echo "<div class='movie-list-item'>";
                echo "<img class='movie-list-item-img' src='../img/coverimage/".$movie['coverimage']."'>";
                echo "<span class='movie-list-item-title'>".$movie['name']."</span>";
                /* echo "<p class='movie-list-item-desc'>".$movi['story_Line']."</p>"; */
                echo "<button class='movie-list-item-button'>Watch</button>";
                echo "</div>";
            }
        }

        function series_list(){
            $sql = "select Series_id,name,coverimage,story_Line from seriesdetails";
            $series=get_data($sql);
            $count=0;
            while($serie=mysqli_fetch_assoc($series)){
                echo "<div class='movie-list-item'>";
                echo "<img class='movie-list-item-img' src='../img/seriesimg/".$serie['coverimage']."'>";
                echo "<span class='movie-list-item-title'>".$serie['name']."</span>";
               /*  echo "<p class='movie-list-item-desc'>".$serie['story_Line']."</p>"; */
                echo "<button class='movie-list-item-button'>Watch</button>";
                echo "</div>";
            }
        }

?>