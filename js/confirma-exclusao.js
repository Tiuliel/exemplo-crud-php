/* Selecionando os links de excluir através da classe ".excluir" (colocando em cada link HTML) */
const links = document.querySelectorAll(".excluir");

/* Percorrendo cada link selecionando anteriormente (conteúdo da constante "links") */
for(const link of links){
    /* adicionando um evento de clique para cada link de excluir */
    link.addEventListener("click", function(event){

        /* anulando o comportamento padrão do link que é redirecionar para algum lugar */
        event.preventDefault();

        /* usando um confirm() para capturar a resposta do usuário,
        que poder ser ok/sim (true) ou cancelar/não (false) */
        let resposta = confirm("Deseja realmente excluir este registro?");

        /* Se a resposta for true, então redirecionamos para o destino original de cada link, ou seja, para a página
        PHO de exclusão. */
        if(resposta)location.href = this.href;
            
        
    })
}