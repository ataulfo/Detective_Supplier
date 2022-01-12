function redireciona(NOME){
let estado = window.open('altera_dados.php?pesquisar_estilo=NOME',"DescriptiveWindowName","left=100,top=100,width=600,height=560")
//document.getElementById('pesquisar_estilo').value = NOME
estado.document.getElementsByClassName('teste_classe').value = NOME
//estado.navigator
//console.log(teste)
 
}
