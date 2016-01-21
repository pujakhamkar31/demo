<!DOCTYPE html>

    <body class=" login">


             <form class="login-form" action="{{ URL::route('test') }}" method="post">
			 <center>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">User Name</label>
                                    <div class="input-icon">
                                        <i class="fa fa-user"></i>
                                    <input  name="user_name" /> 
                                </div>
                            </div>
                            </div>
                                
                                <div class="col-xs-5">
                                    <div class="form-group">
                                   <!-- <label class="control-label visible-ie8 visible-ie9">Password</label>-->
								   <center>
								   password<center>
								   <input type="password" name="user_password">
                                    <div class="input-icon">
                                        <i class="fa fa-lock"></i>
                                    <!--<input  name="user_password" /> -->
                                </div>
                            </div>
                            </div>
                            <div class="col-xs-2">
                            </div>
                           </div>
						   <Input type="submit" name="login" value="Login">
						   <Input type="submit" name="register" value="Register">
                 <!-- <button class="btn blue" id="submit" type="submit"name="login" >Login</button>
                        <button class="btn blue" id="submit12" type="submit" name="register">Register</button>     -->
                    </center>     
                        </form>
            
			
    </body>

</html>