var inputSearch = document.getElementById("searchInput");
var formSearch = document.getElementById("formSearch");
var checkBox = document.querySelectorAll("input[type=checkbox]");
var button = document.getElementById("buttonTrash");
var clientes = [[],[]];

        inputSearch.addEventListener("keydown", function(e){
             if(e.key=="Enter"){
                   formSearch.submit();
             }
        });

      const selected = (e) =>{
            if(e.target.checked){
                  var nombre = document.getElementById("tdNom"+e.target.dataset.id);
                  var surname = document.getElementById("tdApe"+e.target.dataset.id);
                  clientes[0].push(nombre.textContent+surname.textContent.trimStart());
                  clientes[1].push(e.target.dataset.id);
            }
            else{
                  removeArr(clientes[0],clientes[1],e.target.dataset.id);
            }
      }

      function removeArr(arrayNombre,arrayId,idCheck){
              var i = arrayId.indexOf(idCheck);
              if(i!==-1){
                    arrayId.splice(i,1);
                    arrayNombre.splice(i,1);
              }
      }

 checkBox.forEach((check) =>{
     check.addEventListener("change",selected);
 });

 button.addEventListener("click", function(){

      var txtClient="";
      for(var i=0;i<clientes[0].length;i++){
        if(i!==clientes[0].length-1){
          txtClient+=clientes[0][i]+",";
      }
      else {
            txtClient+=clientes[0][i]; 
      }
      }

      if(txtClient!==""){
      const confirm = window.confirm("Desea eliminar a"+txtClient+"?");
        if(confirm){

            var valParam = JSON.stringify(clientes[1]);

            $.ajax({
               type: 'POST',
               url: 'http://192.168.2.103/PHP/FormVanet/deleteClient',
               data: { tuArrJson: valParam},
               success: function(resp){
                  $("#respa").html(resp);
            },
              error: function () {
                  alert("error");
              }
            });
            
        }
      }

 });

 
