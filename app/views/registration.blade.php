<!DOCTYPE html>
<style>
input[type=text], select {
    width: 50%;
    padding: 11px 11px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
    <body class=" login">


             <form class="registration-form" action="{{ URL::route('register') }}" method="post" >
			 <center>
			              <h1>REGISTRATION FORM</h1>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="form-group">
									<center> 
									    
                                     <div class="col-xs-5">User Name		  <input type="text" name="user" ></div>
										 <div>Address 		  <input type="text" name="address" ></div>
										  <div>Email address    <input type="text" name="email"></div>
										  <div>Password<input type="text" name="enter"></div>
										  <div>Re-enter Password<input type="text" name="enter"></div>
										  <Input type="submit" name="login" value="Register">
									</center>
                                   <!-- <label class="control-label visible-ie8 visible-ie9">User Name</label>
                                    <div class="input-icon">
                                        <i class="fa fa-user"></i>
                                    <input  name="user_name" />-->
									
									
                                </div>
                            </div>
                            </div>
                               <!--
                                <div class="col-xs-5">
                                    <div class="form-group">
                                   <!-- <label class="control-label visible-ie8 visible-ie9">Password</label>
								   <center>
								   password<center>
								   <input type="password" name="user_password">
                                    <div class="input-icon">
                                        <i class="fa fa-lock"></i>
                                    <input  name="user_password" />
                                </div>
                            </div>
                            </div>
                            <div class="col-xs-2">
                            </div>
                           </div>-->
						   
						   
						   <!--Input type="submit" name="register" value="Register">
                 <!-- <button class="btn blue" id="submit" type="submit"name="login" >Login</button>
                        <button class="btn blue" id="submit12" type="submit" name="register">Register</button>     -->
                    </center>     
                        </form>
            
			
    </body>

</html>