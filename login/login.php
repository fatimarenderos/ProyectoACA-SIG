<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

    //si los campos estan completos y correctos
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
	     //read from database
		
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

          //validando el login
          //validando si el username ingresado es admin o usuario
					$user_data = mysqli_fetch_assoc($result);
					if(($user_data['user_name'] === 'admin')){

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../admin-map.php");
						die;
					}
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: ../user-map.php");
						die;
					}
					
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!-------Creación del HTML de login------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> E-tracker</title></head>
<body>
    <section class="h-100 gradient-form" style="background-color: #eee;" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="https://flexambiental.com/img/Iconos%20flex_12.png" style="width: 160px; height: 185px" alt="logo" >
                        <h4 class="mt-1 mb-5 pb-1"> Forestation Tracker </h4>
                      </div>
      
					  <form method="post">
                        <p>Login </p>
      
                        <div class="form-outline mb-4">
                          <input type="text" id="user_name" class="form-control"
                            placeholder="Username" name="user_name"/>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="password" class="form-control" placeholder="Password" name="password" />
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-outline-success btn-block fa-lg mb-3"  id="button" type="submit" value="Login">Login</button>
                        </div>
      

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Don't have an account?</p>
                            <a href="signup.php" type="button" class="btn btn-outline-success">Click to Sign up</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4"> 
                      <cite>A man doesn't plant a tree for himself he plants it for posterity</cite> 
                      <br></br> <p>-Alexander Smith</p> </h4>
                      <br> 
                      <br> 
                      <div class="d-flex align-items-center justify-content-center pb-4">
                            <a href="../index.php" type="button" class="btn btn-outline-success">Home</a>
                      </div>


                    </h4>
                      
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>

