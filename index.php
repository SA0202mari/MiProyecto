<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pre-inscrpción</title>
        <link href="vendor/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link href="CSS/nuevoP.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="grey">

        <section>
            <div class="container white darken-1">
                <div class="row">
                    <div class="col s12">
                        <h1>Preinscrpción</h1>
                        <form action="index.php">
                            <div class="input-field col s4">
                                <input type="text" id="nombre">
                                <label for="nombre">Apallido Paterno</label>
                            </div> 

                            <div class="input-field col s4">
                                <input type="text" id="Apellido Paterno">
                                <label for="nombre">Apellido Materno</label>
                            </div> 

                            <div class="input-field col s4">
                                <input type="text" id="Apellido Materno"> 
                                <label for="nombre">Nombre</label>
                            </div> 

                            <div class="datepicker col s5">                                <!--                                <label for="nombre">Fecha de Nacimiento</label>-->
                                <input type="text" class="datepicker">                                
                            </div>

                            <div class="browser-default col s7"> 
                                <label>Grado al que Ingresa</label>
                                <select class="browser-default">
                                    <option value="" disabled selected></option>
                                    <option value="1">Primaria</option>
                                    <option value="2">Secundaria</option>                              
                                </select>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" id="Estado"> 
                                <label for="nombre">Estado</label>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" id="Municipio"> 
                                <label for="nombre">Municipio</label>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" id="Colonia"> 
                                <label for="nombre">Colonia</label>
                            </div> 
                            <div class="input-field col s4">
                                <input type="text" id="Numero Interior"> 
                                <label for="nombre">Numero Interior</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="Numero Exterior"> 
                                <label for="nombre">Numero Exterior</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="calle"> 
                                <label for="nombre">Calle</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="Telefono"> 
                                <label for="nombre">Telefono</label>
                            </div>
                            <div class="browser-default col s4"> 
                                <label>Sexo</label>
                                <select class="browser-default">
                                    <option value="" disabled selected></option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Maculino</option>                              
                                </select>
                            </div>
                            <div class="button col s4">
                                <button class="btn waves-effect waves-light" name="enviar">Siguiente
                                    <i class="material-icons right">send</i>
                                </button>        
                            </div>         
                        </form>                         
                    </div>
                    <!--                    <div class="button col s4">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Siguiente
                                                <i class="material-icons right">send</i>
                                            </button>        
                                        </div> -->
                </div>                
            </div>  
        </section>
        <!-- formilario tutor ----------       -->
        <section>
            <div class="container white darken-1">
                <div class="row">
                    <div class="col s12">
                        <h1>Datos de Tutor</h1>
                        <form action="#">
                            <div class="input-field col s4">
                                <input type="text" id="nombre">
                                <label for="nombre">Apallido Paterno</label>
                            </div> 

                            <div class="input-field col s4">
                                <input type="text" id="Apellido Paterno">
                                <label for="nombre">Apellido Materno</label>
                            </div> 

                            <div class="input-field col s4">
                                <input type="text" id="Apellido Materno"> 
                                <label for="nombre">Nombre</label>
                            </div> 

                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>

                            <div class="browser-default col s4"> 
                                <label>Edad</label>
                                <select class="browser-default">                                                                 
                                </select>
                            </div>

                            <div class="browser-default col s4"> 
                                <label>Sexo</label>
                                <select class="browser-default">
                                    <option value="" disabled selected></option>
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>                              
                                </select>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" id="Estado"> 
                                <label for="nombre">Estado</label>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" id="Municipio"> 
                                <label for="nombre">Municipio</label>
                            </div>

                            <div class="input-field col s4">
                                <input type="text" id="Colonia"> 
                                <label for="nombre">Colonia</label>
                            </div> 
                            <div class="input-field col s4">
                                <input type="text" id="Numero Interior"> 
                                <label for="nombre">Numero Interior</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="Numero Exterior"> 
                                <label for="nombre">Numero Exterior</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="calle"> 
                                <label for="nombre">Calle</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" id="Telefono"> 
                                <label for="nombre">Telefono</label>
                            </div>

                            <div class="button col s4">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                                    <i class="material-icons right">send</i>
                                </button> 
                            </div>  

                            <div class="fixed-action-btn horizontal toolbar">
                                <a class="btn-floating btn-large waves-light blue"><i class="material-icons">add</i>                                    
                                </a>
                                <ul>
                                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                                </ul>
                            </div> 


                        </form>
                    </div>
                </div>
            </div>  
        </section>


        <!-- JQUERY!-->
        <script src="vendor/js/jquery-3.3.1.min.js" type="text/javascript"></script>

        <!-- MATERIAL DESING !-->
        <script src="vendor/js/materialize.min.js" type="text/javascript"></script>

        <!-- JsvaScript!-->
        <script src="js/nuevoP.js" type="text/javascript"></script>


    </body>
</html>
