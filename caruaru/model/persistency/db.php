<?php
putenv("DATABASE_URL=postgres://tjkffkenqbwmvd:155f089e921c8b63afebc5559cbb884a5512076e7414f523796b325c892f60c8@ec2-3-233-43-103.compute-1.amazonaws.com:5432/dic40ha3gf799");
echo getenv("DATABASE_URL");

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