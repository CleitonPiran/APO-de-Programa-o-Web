function validar_nome(elemento) {
    if (elemento.value.length >= 3) {
        console.log("Nome válido");
        document.getElementById("msg_erro").innerHTML = "";
    } else {
        console.log("Nome inválido");
        document.getElementById("msg_erro").innerHTML = "O nome deve possuir no mínimo 3 caracteres.";
    }
}

function validarSenha() {
    const senha = document.getElementById("senha").value;
    const confirmarSenha = document.getElementById("confirmar_senha").value;

    if (senha !== confirmarSenha) {
        document.getElementById("msg_erro").innerHTML = "As senhas não coincidem.";
        return false;
    }

    document.getElementById("msg_erro").innerHTML = "";
    return true;
}

function atualizarPessoa() {
    const id = document.getElementById("id").value;
    const nome = document.getElementById("nome").value;
    const idade = document.getElementById("idade").value;
    const email = document.getElementById("email").value;

    if (!id || !nome || !idade || !email) {
        document.getElementById("msg_erro").innerHTML = "Todos os campos são obrigatórios.";
        return;
    }

    if (nome.length < 3) {
        document.getElementById("msg_erro").innerHTML = "O nome deve possuir no mínimo 3 caracteres.";
        return;
    }

    const formData = new FormData();
    formData.append("id", id);
    formData.append("nome", nome);
    formData.append("idade", idade);
    formData.append("email", email);

    fetch("processaupdate.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            document.getElementById("msg_sucesso").innerHTML = "Atualizado com sucesso!";
            document.getElementById("msg_erro").innerHTML = "";
        } else {
            document.getElementById("msg_erro").innerHTML = "Erro ao atualizar: " + data;
            document.getElementById("msg_sucesso").innerHTML = "";
        }
    })
    .catch(error => {
        document.getElementById("msg_erro").innerHTML = "Erro na requisição: " + error;
    });
}

function atualizarFornecedor() {
    const id = document.getElementById("id").value;
    const fornecedor = document.getElementById("fornecedor").value;
    const telefone = document.getElementById("telefone").value;
    const cidade = document.getElementById("cidade").value;
    const produtoforn = document.getElementById("produtoforn").value;

    if (!id || !fornecedor || !telefone || !cidade || !produtoforn) {
        document.getElementById("msg_erro").innerHTML = "Todos os campos são obrigatórios.";
        return;
    }

    const formData = new FormData();
    formData.append("id", id);
    formData.append("fornecedor", fornecedor);
    formData.append("telefone", telefone);
    formData.append("cidade", cidade);
    formData.append("produtoforn", produtoforn);

    fetch("processaupdatefornecedor.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            document.getElementById("msg_sucesso").innerHTML = "Fornecedor atualizado com sucesso!";
            document.getElementById("msg_erro").innerHTML = "";
        } else {
            document.getElementById("msg_erro").innerHTML = "Erro ao atualizar fornecedor: " + data;
            document.getElementById("msg_sucesso").innerHTML = "";
        }
    })
    .catch(error => {
        document.getElementById("msg_erro").innerHTML = "Erro na requisição: " + error;
    });
}

function atualizarProduto() {
    const id = document.getElementById("id").value;
    const produto = document.getElementById("produto").value;
    const valor = document.getElementById("valor").value;
    const fornproduto = document.getElementById("fornproduto").value;

    if (!id || !produto || !valor || !fornproduto) {
        document.getElementById("msg_erro").innerHTML = "Todos os campos são obrigatórios.";
        return;
    }

    const formData = new FormData();
    formData.append("id", id);
    formData.append("produto", produto);
    formData.append("valor", valor);
    formData.append("fornproduto", fornproduto);

    fetch("processaupdateproduto.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            document.getElementById("msg_sucesso").innerHTML = "Produto atualizado com sucesso!";
            document.getElementById("msg_erro").innerHTML = "";
        } else {
            document.getElementById("msg_erro").innerHTML = "Erro ao atualizar produto: " + data;
            document.getElementById("msg_sucesso").innerHTML = "";
        }
    })
    .catch(error => {
        document.getElementById("msg_erro").innerHTML = "Erro na requisição: " + error;
    });
}