$(document).ready(function () {

  //Crie está função para validar qualquer campo no formulario de endereco
  const validaCamposEndereco = () => {
     if(!$("input[name=localidade]").val()) {
       swal(`Campo Vazio`, `O campo localidade precisa ser preenchido`, 'warning');
       return false
     }
     if(!$("input[name=numero").val()) {
      swal(`Campo Vazio`, `O campo número precisa ser preenchido`, 'warning');
      return false
    }
    if(!$("input[name=rua]").val()) {
      swal(`Campo Vazio`, `O campo rua precisa ser preenchido`, 'warning');
      return false
    }

    if(!$("select[name=zona]").val()) {
      swal(`Campo Vazio`, `O campo zona precisa ser preenchido`, 'warning');
      return false
    }

    return true;
  }

  $('#salvar_endereco').on('click', function () {
    if(validaCamposEndereco()) {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        const dados = {
          'localidade': $("input[name=localidade]").val(),
          'rua': $("input[name=rua]").val(),
          'numero': $("input[name=numero]").val(),
          'id_user': $("input[name=id_user]").val(),
          'zona': $("select[name=zona]").val()
        } 
        

        $.ajax({
           url: `/endereco/store`,
           type: 'post',
           data: dados,
           success: function (data) {
              swal(data).then(function () {
                location.reload();
              })
              
           },
           error: function (data) {
             swal(data)
             return false;
           }
        })
      }
      
  })

})