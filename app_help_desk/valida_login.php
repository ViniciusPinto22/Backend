<?php
session_start();

$usuario_autenticado = false;

//definindo a senha e os emails corretos

$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => 12345
    ],
    ['email'=> 'aluno@senai.br',
    'senha'=> 54321
    ],
    ['email'=> 'instrutor@senai.br',
    'senha'=> 01234
    ]
];



foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;

    }
}

//fazendo a verficação dos emails

if ($usuario_autenticado == true){
    $_SESSION['autenticado'] = 'SIM';
    echo "<h1>Usuario autenticado com sucesso";
    header ('location: painel.php?login=autorizado');
}else{
    $_SESSION['autenticado'] = 'NÃO';
    //echo "Usuario ou senha incorreto";
    header ('location: index.php?login=erro');
}
?>