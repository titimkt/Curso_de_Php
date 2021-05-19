/*
$(document).ready(function() {
     console.log( "ready!" );

     $('.btn-criar-usuario').on('click', function(){
          console.log("funciona!");
          ValidarForm();
     });

     // Example starter JavaScript for disabling form submissions if there are invalid fields
function ValidarForm () {
     'use strict'
   
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.querySelectorAll('.needs-validation')
   
     // Loop over them and prevent submission
     Array.prototype.slice.call(forms)
       .forEach(function (form) {
         form.addEventListener('submit', function (event) {
           if (!form.checkValidity()) {
             event.preventDefault()
             event.stopPropagation()
           }
   
           form.classList.add('was-validated')
         }, false)
       })
   }
 });
*/

$(document).ready(function() {

   var TabelaUsuarios = $("#IdTabelaUsuarios");
   MontarTabela()
   
   function MontarTabela() {
      var Cabecalho = MontarCabecalhoTabela();
      var Corpo = MontarCorpoTabela();
      var HtmlDaTabela = (Cabecalho + Corpo);

      TabelaUsuarios.html(HtmlDaTabela);

   }

   function MontarCabecalhoTabela() {
      var Cabecalho = (
         '<thead class="table-dark">' +
            '<tr>' +
               '<th scope="col">ID</th>' +
               '<th scope="col">Nome</th>' +
               '<th scope="col">Sobrenome</th>' +
               '<th scope="col">Usuário</th>' +
               '<th scope="col">Cidade</th>' +
               '<th scope="col">Estado</th>' +
               '<th scope="col">Ações</th>' +
            '</tr>' +
         '</thead>'
      );

      return Cabecalho;

   }

   function MontarCorpoTabela() {
      var Corpo = (
         '<tbody>' +
            '<tr>' +
               '<td>1</td>' +
               '<td>Mark</td>' +
               '<td>Otto</td>' +
               '<td>@mdo</td>' +
               '<td>Garibaldi</td>' +
               '<td>Rio Grande do Sul</td>' +
               '<td><button type="button" class="btn btn-outline-warning">Editar</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-danger">Excluir</button>' +
               '</td>' +
            '</tr>' +
            '<tr>' +
               '<td>2</td>' +
               '<td>Jacob</td>' +
               '<td>Thornton</td>' +
               '<td>@fat</td>' +
               '<td>Curitiba</td>' +
               '<td>Paraná</td>' +
               '<td><button type="button" class="btn btn-outline-warning">Editar</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-danger">Excluir</button>' +
            '</tr>' +
            '<tr>' +
               '<td>3</td>' +
               '<td>Larry</td>' +
               '<td>the Bird</td>' +
               '<td>@twitter</td>' +
               '<td>Penha</td>' +
               '<td>Santa Catarina</td>' +
               '<td><button type="button" class="btn btn-outline-warning">Editar</button>&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline-danger">Excluir</button>' +
            '</tr>' +
         '</tbody>'
      );

      return Corpo;

   }

});