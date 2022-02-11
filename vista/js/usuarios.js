function editarUsuario(pagina, id, nombre, perfil){
    var url=pagina;
    var id=id;
    var nombre=nombre;
    var perfil=perfil;
  
  
    window.location.assign(url + "?id=" + id + "&nombre=" + nombre + "&perfil=" + perfil);
  }

  function eliminarUsuario(pagina, id, perfil, nombre){
    var url=pagina;
    var id=id;
    var perfil=perfil;
    var nombre=nombre;
    var confirmar=confirm("¿Confirma elimiar el usuario " + nombre + "?");

    if (confirmar==true) {
      window.location.assign(url + "?id=" + id + "&perfil=" + perfil);
    }
  
  }


  function resetContrasena(pagina, id, cedula, nombre){
    var url=pagina;
    var id=id;
    var cedula=cedula;
    var nombre=nombre;
    var confirmar=confirm("¿Confirma resetear la contraseña del usuario " + nombre + "?");

  if (confirmar==true) {
      window.location.assign(url + "?id=" + id + "&cedula=" + cedula);
  }
  
  
    
  }


 
 



