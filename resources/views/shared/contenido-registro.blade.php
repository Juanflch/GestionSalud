<body>

<link href="css/signin.css" rel="stylesheet">

<!-- comprobando errores -->





 <div class="form-signin" align="center">

    <div class="signup-form-container">
    
         <!-- form start -->

         
          {!! Form::open(['route'=>'usuario.store', 'method'=>'POST']) !!}

            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
            @endforeach 
         
          <div class="form-header">
                <h3 class="form-title"><i class="fa fa-user"></i>Ingresa tus datos</h3>
          </div>
       
         <div class="form-signin">

            <!-- Rut -->

        <div class="form-group">
            <div class="input-group">

          {!!Form::text('us_rut',null,['class'=>'form-control', 'placeholder'=>'Rut', 'required'])!!}

            </div>
        </div>


          <!-- Nombre -->

          <div class="form-group">
                   <div class="input-group">
                   <input name="us_nombre" type="text" class="form-control" placeholder="Nombre" required="">
                   </div>
                   <span class="help-block" id="error"></span>
          </div>

              <!-- Apellido -->

                <div class="form-group">
                   <div class="input-group">
                   
                   <input name="us_apellido" type="text" class="form-control" placeholder="Apellido" required="">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                      
          <!-- Correo -->
          <div class="form-group">
                  <label for="inputEmail" class="sr-only">Direccion de email</label>
                  <input name="us_email" type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
          </div>        

             <!-- Pass -->  

              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="us_pass" id="password" type="password" class="form-control" placeholder="Contraseña">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             <!--      <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Re escribela">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
              -->               
             </div>
                        
                        
            </div>
            
            <div class="form-footer">
                 <button class="btn btn-lg btn-primary btn-block" type="submit">Registrate</button>
            </div>

{{ Form::close() }}
           
            
           </div>

 </div>
    


<!-- javascript/jquery validations will be here  -->

</body>