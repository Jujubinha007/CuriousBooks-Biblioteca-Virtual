async function carregar_usuarios(valor) {
    if (valor.length >= 3) {
        //console.log("Pesquisar: " + valor);

        const dados = await fetch('listar_usuarios.php?nome=' + valor);
        const resposta = await dados.json();
        //console.log(resposta);

        var html = "<ul class='list-group position-fixed'>";

        if (resposta['erro']) {
            html += "<li class='list-group-item disabled'>" + resposta['msg'] + "</li>";
        } else {
            for (i = 0; i < resposta['dados'].length; i++) {
                html += "<li class='list-group-item list-group-item-action' onclick='get_id_usuario(" + resposta['dados'][i].id + "," + JSON.stringify(resposta['dados'][i].nome) + ")'>" + resposta['dados'][i].nome + "</li>";
            }

        }
        html += "</ul>";

        document.getElementById('resultado_pesquisa').innerHTML = html;
    }
}

function get_id_usuario(id_usuario, nome) {
    //console.log("Id do usuario selecionado: " + id_usuario);
    //console.log("nome do usuario selecionado: " + nome);

    document.getElementById("usuario").value = nome;

    document.getElementById("id_usuario").value = id_usuario;
}

const fechar = document.getElementById('usuario');

document.addEventListener('click', function (event) {
    const validar_clique = fechar.contains(event.target);
    if (!validar_clique) {
        document.getElementById('resultado_pesquisa').innerHTML = '';
    }
});