const API = "http://localhost/escola_crud/index.php";

async function listar() {

    const resposta = await fetch(API + "/alunos");

    const data = await resposta.json();

    let html = "";

    data.dados.forEach(aluno => {

        html += `

        <li>

            <span>
                ${aluno.nome} - ${aluno.turma}
            </span>

            <button onclick="deletar(${aluno.RA})">
                Excluir
            </button>

        </li>

        `;
    });

    document.getElementById("lista").innerHTML = html;
}

async function cadastrar() {

    await fetch(API + "/alunos", {

        method: "POST",

        headers: {
            "Content-Type": "application/json"
        },

        body: JSON.stringify({

            nome: nome.value,
            email: email.value,
            dataNascimento: dataNascimento.value,
            turma: turma.value

        })

    });

    listar();
}

async function deletar(id) {

    await fetch(API + "/alunos/" + id, {

        method: "DELETE"

    });

    listar();
}

listar();
