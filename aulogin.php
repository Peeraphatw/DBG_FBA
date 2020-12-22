<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
$uname=$_REQUEST["username"];
$pass=$_REQUEST["password"];     
			//connection
				include("condb.php");   
				//รับค่า user & password  
				//query 
                  $sql="SELECT * FROM user_dbg Where username='".$uname."' and password='".$pass."'";
                  $result = mysqli_query($con,$sql);
                  if(mysqli_num_rows($result)==1)
				  {
                      $row = mysqli_fetch_array($result);
					  $_SESSION["id"] = $row["id"];
                      $_SESSION["username"] = $row["username"];
					  $_SESSION["password"] = $row["password"];
					  $_SESSION["name"] = $row["name"];
                      $_SESSION["lastname"] = $row["lastname"];
                      $_SESSION["department"] = $row["department"];
                      $_SESSION["number"]= $row["number"];
                      $_SESSION["mlev"]= $row["mlev"];
                      		if($_SESSION["mlev"]=="admin")
							{ 
                        		header("Location:mainad.php");
                      		}
                      		if ($_SESSION["mlev"]=="user")
							{  
								header("Location:mainus.php");
                              }
                              if ($_SESSION["mlev"]=="รออนุมัติ")
                              {  
                                header("Location:wait01.php");
                                }
							else
							{
								echo "<script>";
                        		echo "alert(\"Usernameหรือรหัสผ่านผิด \");";
                        		echo "window.history.back()";
                    			echo "</script>";
							}
					}
					else
					{
                    echo "<script>";
                    echo "alert(\" Usernameหรือรหัสผ่านผิด\");";
                    echo "window.history.back()";
                    echo "</script>";
					}
?>