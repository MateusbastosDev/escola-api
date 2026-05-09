const API = "http://localhost/escola_crud/index.php";

async function login() {

    const email = document.getElementById("email").value;

    const senha = document.getElementById("senha").value;

    const resposta = await fetch(API + "/auth/login", {

        method: "POST",

        headers: {
            "Content-Type": "application/json"
        },

        body: JSON.stringify({
            email,
            senha
        })

    });

    const data = await resposta.json();

    if(data.sucesso){

        window.location.href = "painel.html";

    } else {

        document.getElementById("msg").innerHTML =
        "Email ou senha incorretos";
    }
}
