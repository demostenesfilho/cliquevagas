<?php
putenv("DATABASE_URL=host=ec2-54-87-179-4.compute-1.amazonaws.com port=5432 user=rmcgucryslcrqs dbname=d5f2ke6idtkp10 password=8bfde7c7bcfbbb256856d1b4ded1dcec88a04810a4edddc7df3d749c9c55a13f");
//putenv("DATABASE_URL=host=localhost port=5432 user=postgres dbname=postgres password=123");
//echo getenv("DATABASE_URL");

/* CONEXÃO DE BANCO SQL */
function banco($sql){
  /* ESTABELECENDO CONEXÃO UTILIZANDO VARIÁVEIS DE AMBIENTE */
  $conn = pg_connect(getenv("DATABASE_URL"));
  if (!$conn)
    die ("Erro conexão com o banco.");
  /* ESTABELECENDO RESULTADO PARA CONEXÃO EM CASO DE ERRO */
  $resultado = pg_query($conn, $sql);
  if (!$resultado)
    die ("Erro de conexão com o SQL.");
  /* FECHANDO CONEXÃO E RETORNANDO RESULTADO */
  pg_close($conn);
  
  return $resultado;
}
?>
