<?php

$host = 'localhost';
$port = '5432';
$dbname = 'cleber';
$user = 'postgres';
$password = 'arieljahn123'; 

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

$dbconn = pg_connect($conn_string);

$query = "
    CREATE TABLE IF NOT EXISTS TBPESSOA (
        PESCODIGO SERIAL NOT NULL PRIMARY KEY,
        PESNOME VARCHAR(150) NOT NULL,
        PESSOBRENOME VARCHAR(150),
        PESEMAIL VARCHAR(150),
        PESPASSWORD TEXT,
        PESCIDADE VARCHAR(100),
        PESESTADO VARCHAR(2)
    );";

$result = pg_query($dbconn, $query);

$aDados = [
   'teste',
   'sobrenome',
   'email',
   'senha',
   'cidade',
   'sc'   
];

// $query = '
//     INSERT INTO TBPESSOA (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO) 
//     VALUES ($1, $2, $3, $4, $5, $6)
//     RETURNING PESCODIGO;
// ';

// $result = pg_query_params($dbconn, $query, $aDados);

pg_free_result($result);

pg_close($dbconn);