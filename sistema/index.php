<?php
#base de dados
include 'db.php';

#cabeçalho
include 'header.php';

#conteúdo da página
if (isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}

else {
	$pagina = 'home';
}
switch($pagina){
	case 'config_upload':include 'views/config_upload.php';break;
	case 'executa_upload': include 'views/executa_upload.php';break;
	case 'series': include 'views/series.php'; break;
	case 'pagina_serie': include 'views/pagina_serie.php'; break;
	case 'adiciona_serie': include 'views/adiciona_serie.php'; break;
	case 'perfil': include 'views/perfil.php'; break;
	case 'filmes': include 'views/filmes.php'; break;
	case 'cadastrar': include 'views/cadastrar.php'; break;
	case 'login': include 'views/login.php'; break;
	case 'logout': include 'views/logout.php'; break;
	case 'excluirSerie': include 'views/excluirSerie.php'; break;
	case 'excluirFilme': include 'views/excluirFilme.php'; break;
	case 'inserir_serie': include 'views/inserir_serie.php'; break;
	case 'inserir_filme': include 'views/inserir_filme.php'; break;
	case 'editarSerie': include 'views/editarSerie.php'; break;
	case 'editarFilme': include 'views/editarFilme.php'; break;
	case 'contato': include 'views/contato.php'; break;
	default: include 'views/home.php'; break;
}

#rodapé
include 'footer.php';

?>


