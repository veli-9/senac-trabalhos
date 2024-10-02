const salvar = document.getElementById('btncadastromedicamento');

async function Insert() {
    const form = document.getElementById('form_cadastro_medicamentos');
    const formData = new FormData(form);
    const opt = {
        method: 'POST',
        body: formData
    };
    const response = await fetch('/medicamentos/cadastro', opt);
if (!response.ok) {
    const errorText = await response.text(); // Leia a resposta como texto
    console.error('Erro:', errorText);
    alert('Verique os dados digitados e tente novamente!');
    return;
}
const json = await response.json()
    if (json.status != true) {
        alert('Verique os dados digitados e tente novamente!');
        return;
    }
    alert('Usuário cadastrado com sucesso!');
    return;
}
salvar.addEventListener('click', async () => {
    await Insert();
});