 <!DOCTYPE html>
 <html>
 <head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <div class="container">
    <div class="col s6" >
      <form method="POST" action="{{URL::to('/submit')}}" class="col s6">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Digite o seu usuário" name="name" id="first_name" type="text" class="validate">
            <label for="first_name">Usuário</label>
          </div>
          <div class="input-field col s6">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Senha</label>
          </div>
          <input name="token" type="hidden" value="{{csrf_token()}}">
        </div>
        <button class="btn waves-effect waves-light" type="submit" >Enviar
         <i class="material-icons right">send</i>
       </button>
     </form>
   </div>
 </div>
 <!--JavaScript at end of body for optimized loading-->
 <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>