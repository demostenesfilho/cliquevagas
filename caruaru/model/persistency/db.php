<?php
putenv("DATABASE_URL=host=ec2-54-152-28-9.compute-1.amazonaws.com port=5432 user=vxglrvjcpzwlfo dbname=d5fjlrjlpirn9u password=47057bf317e1251a0526ab904ec3e0174c9822dab0e2088d29a45e38a4e855c8");
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
