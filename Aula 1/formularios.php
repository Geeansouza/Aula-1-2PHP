<?php

   // echo('Testando o PHP'.'<br>');
   //isset() permite verificar a existencia de uma variavel
   //validação para identificar se obtao foi clicado e disponibilizado na ação do get 
   if(isset($_GET['btnSalvar'])){

    //recuperando dados via GET
    $name = $_GET['txtNome'];
    $cidade = $_GET['sltCidade'];
    $sexo = $_GET['rdoSexo'];
    $obs = $_GET['txtObs'];

    
    
    if(isset($_GET['chkPortugues']))
    {
        $idiomaPortugues = $_GET['chkPortugues'];
    }
    if(isset($_GET['chkIngles']))
    {
        $idiomaEspanhol = $_GET['chkIngles'];
    }
    if(isset($_GET['chkEspanhol']))
    {
        $idiomaIngles = $_GET['chkEspanhol'];
    }
    //foi criado essas variaveis para resolver o problema de variaveis indefinida na exibição dos dados
    $idiomaEspanhol = null;
    $idiomaIngles = null;
    $idiomaEspanhol = null;

    //escrevendo conteudo das variantes
    echo('<b>Nome:</b>'.$name.'<br>');
    echo('<b>Cidade:</b>'.$cidade .'<br>');
    echo('<b>Sexo:</b>'.$sexo.'<br>');
    echo('<b>Observação:</b>'.$obs).'<br>';
    echo('<b>Idiomas:</b>'.$idiomaPortugues.$idiomaEspanhol.$idiomaIngles);
    

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Código para desativar o redimensionamento da textarea*/
        textarea{
            resize: none;
        }
    </style>
</head>
<body>
    <!--
        GET -> permite retirar os dados dos formulários 
        e disponibilizar na URL da página;
        
        POST -> permite retirar os dados dos formulários 
        e disponibilizar em váriaveis locais;
        ACTION -> é utilizado para especificar em qual arquivo 
        ou página será disponibilizado os dados do FORM
        input type="text" -> permite colocar uma caixa de do tipo texto
        size="" -> permite especificar o tamanho da caixa
        maxlength="" -> permite configurar a qtde de caracteres que 
        será digitado na caixa
        <select> - permite criar uma lista de opções
            <option> - é atraves ela que podemos criar itens dentro da lista
            <option value=""> - a propriedade value é obrigatótia pra que o
                formulário consiga resgatar o valor da item selecionado pelo 
                usuário e disponibilizar para o back-end;
        <input type="radio" - permite criar opções de escolhas.
            obs.: para configurar o radio fazendo com que permita apenas
            uma opção de escolha é obrigatório todas as inputs terem o mesmo nome.
    -->
    <form name="frmCadastro" method="get" action="formularios.php">
        nome: <input type="text" name="txtNome" size="50" maxlength="30">
        <br><br>      
        cidade: 
        <select name="sltCidade">
            <option value="" selected>Selecione</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="itapevi">Itapevi</option>
            <option value="carapicuíba">Carapicuíba</option>
            <option value="osasco">Osasco</option>
        </select> 
        <br><br>     
        sexo: 
        <input type="radio" name="rdoSexo" value="F"checked> Feminino
        <input type="radio" name="rdoSexo" value="M"> Masculino
        <input type="radio" name="rdoSexo" value="NB"> Neutro
        <br><br>       
        idioma:
        <input type="checkbox" name="chkPortugues" value="Pt " checked> Português 
        <input type="checkbox" name="chkIngles" value="En "> Inglês
        <input type="checkbox" name="chkEspanhol" value="Es "> Espanhol
        <br><br>
        observação:
        <br>
        <textarea name="txtObs" cols="30" rows="5"></textarea>
        <br><br>
        <!--
            <input type="submit"> - permite retirar os dados do formulário
            através do próprio HTML, fazendo um submit nos dados
            <input type="button"> - somente será possívekl retirar os dados
            do formulário através do JavaScript
            <input type="reset"> - permite limpar todos os elementos do
            formulário 
        -->
        <input type="submit" name="btnSalvar" value="Salvar">
        <input type="reset" name="btnLimpar" value="Limpar">

    </form>
</body>
</html>