<?php
/***
 *                _
 *               | |
 *      ___  __ _| |___  __ _
 *     / __|/ _` | / __|/ _` |
 *     \__ \ (_| | \__ \ (_| |
 *     |___/\__,_|_|___/\__,_|
 *     GitHub: https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator/
 *
*/
class SalsaConta {
    static function conectar($conn) {
        if (isset($_POST['conectar'])) {
            $usuario = fs($_POST['usuario_salsa']);
            $vlsalsa = 1;
            $senha = fs($_POST['senha_salsa']);
            $senhagerada = password_hash($senha, PASSWORD_BCRYPT);
            if (log == 0) {
                $_SESSION['erro'] = 'O login está desativado';
                $erro = 1;
            } else {
                $logar = "SELECT * FROM users WHERE username='" . $usuario . "'";
                $lg = mysqli_query($conn, $logar) or die(mysqli_error($conn));
                if ($ra = mysqli_query($conn, $logar)) {
                    $existe = mysqli_num_rows($ra);
                    if ($existe == $vlsalsa) {
                        $busca = $lg->fetch_assoc(); {
                            $existesenha = $busca['password'];
                            if (password_verify($senha, $existesenha)) {
                                $ban = "SELECT * FROM bans WHERE user_id ='" . $busca['id'] . "' AND type='account'";
                                if ($ra2 = mysqli_query($conn, $ban)) {
                                    $existe2 = mysqli_num_rows($ra2);
                                    if ($existe2 == $vlsalsa) {
                                        $a = $ban;
                                        $c = mysqli_query($conn, $a) or die(mysqli_error($conn));
                                        while ($b = $c->fetch_assoc()) {
                                            $_SESSION['erro'] = '
                                                Você está banido pelo seguinte motivo: ' . $b['ban_reason'] . ' e ficará banido até ' . date('d/m/Y', $b['ban_expire']) . '. Você pode contestar seu banimento em nossa página do Facebook.';
                                            $erro = 1;
                                        }
                                    }
                                }
                                $ban3 = "SELECT * FROM bans WHERE ip ='" . $_SERVER['REMOTE_ADDR'] . "' AND type='ip'";
                                if ($ra4 = mysqli_query($conn, $ban3)) {
                                    $existe3 = mysqli_num_rows($ra4);
                                    if ($existe3 == $vlsalsa) {
                                        $a = $ban3;
                                        $c2 = mysqli_query($conn, $a) or die(mysqli_error($conn));
                                        while ($b2 = $c2->fetch_assoc()) {
                                            $_SESSION['erro'] = 'Você está banido por IP e não pode criar novas contas, você está banido pelo seguinte motivo: ' . $b2['ban_reason'] . ' e ficará banido até ' . date('d/m/Y', $b2['ban_expire']) . '. Você pode contestar seu banimento em nossa página do Facebook.';
                                            $erro = 1;
                                        }
                                    }
                                }
                                if ($busca['rank'] >= rank_minimo_manutencao && manutencao == 1) {
                                    $mns = 1;
                                } elseif ($busca['rank'] < rank_minimo_manutencao && manutencao == 1) {
                                    $mns = 0;
                                    $_SESSION['erro'] = 'Apenas membros da equipe podem fazer login no momento.';
                                    $erro = 1;
                                }
                                if (isset($erro)) {
                                    if ($erro == 1) echo $_SESSION['erro'];
                                } else {
                                    $_SESSION['usuario'] = $usuario;
                                    $_SESSION['senha'] = $senhagerada;
                                    $ip = "UPDATE users SET ip_current='" . $_SERVER['REMOTE_ADDR'] . "' WHERE username='" . $usuario . "'";
                                    $conn->query($ip);
                                    exit(header("Location: /me"));
                                }
                            } else {
                                $_SESSION['erro'] = 'Usuário e/ou senha incorretos.';
                                $erro = 1;
                            }
                        }
                    } else {
                        $_SESSION['erro'] = 'Usuário e/ou senha incorretos.';
                        $erro = 1;
                    }
                }
            }
        }
    }
    static function registrar($conn) {
        if (isset($_POST['registrar'])) {
            $usuario = fs($_POST['usuario_salsa']);
            $email = fs($_POST['email']);
            $vlsalsa = 1;
            $senha = fs($_POST['senha_salsa']);
            $senharapetida = fs($_POST['senha_repetir']);
            $senhagerada = password_hash($senha, PASSWORD_BCRYPT);
            $usuariovic = strlen($usuario);
            if (captcha == 1 || captcha == true) {
                $scaptcha = fs($_POST['captcha']);
                $scaptchar = fs($_POST['captcha_repetir']);
                if ($scaptcha != $scaptchar) {
                    $_SESSION['erro'] = 'O captcha inserido está incorreto.';
                    $erro = 1;
                }
            }
            if (reg == 0) {
                $_SESSION['erro'] = 'O registro está desativado.';
                $erro = 1;
            } else {
                $ban3 = "SELECT * FROM bans WHERE ip ='" . $_SERVER['REMOTE_ADDR'] . "' AND type='ip'";
                if ($ra4 = mysqli_query($conn, $ban3)) {
                    $existe3 = mysqli_num_rows($ra4);
                    $vlsalsa = 1;
                    if ($existe3 == $vlsalsa) {
                        $a = $ban3;
                        $c2 = mysqli_query($conn, $a) or die(mysqli_error($conn));
                        while ($b2 = $c2->fetch_assoc()) {
                            $_SESSION['erro'] = 'Você está banido por IP e não pode criar novas contas, você está banido pelo seguinte motivo: <b>' . $b['ban_reason'] . '</b> e ficará banido até ' . date('d/m/Y', $b['ban_expire']) . '. Você pode contestar seu banimento em nossa página do Facebook.';
                            $erro = 1;
                        }
                    }
                }
                $qra = "SELECT * FROM users WHERE username='" . $usuario . "'";
                if ($ra = mysqli_query($conn, $qra)) {
                    $existe = mysqli_num_rows($ra);
                    if ($existe == $vlsalsa) {
                        $_SESSION['erro'] = 'O nome de usuário já existe, por gentileza escolha outro.';
                        $erro = 1;
                    }
                    $qra2 = "SELECT * FROM users WHERE ip_current='" . $_SERVER['REMOTE_ADDR'] . "'";
                    if ($ra2 = mysqli_query($conn, $qra2)) {
                        $existe2 = mysqli_num_rows($ra2);
                        if ($existe2 > contasporip) {
                            $_SESSION['erro'] = 'Você só pode criar ' . contasporip . ' contas por IP.';
                            $erro = 1;
                        } else {
                            if ($usuariovic > 14 || $usuariovic < 3) {
                                $_SESSION['erro'] = 'Seu nome de usuário deve conter mais de 3 caracteres e no máximo 14 caracteres.';
                                $erro = 1;
                            } else {
                                if ($senha != $senharapetida) {
                                    $_SESSION['erro'] = 'As senhas digitadas nao sao iguais.';
                                    $erro = 1;
                                } else {
                                    if (preg_match('/[\'^êãõñêâôîôû£$%&*()}{@#~?><>,|=_+¬-]/', $usuario)) {
                                        $_SESSION['erro'] = 'Não é permitido caracteres especiais no nome de usuário.';
                                        $erro = 1;
                                    } else {
                                        if (strrpos($usuario, " ") || strrpos($usuario, " ") !== false) {
                                            $_SESSION['erro'] = 'Não é permitido espaços  no nome de usuário.';
                                            $erro = 1;
                                        } else {
                                            if (isset($erro)) {
                                                if ($erro == 1)
                                                $_SESSION['erro'] = $_SESSION['erro'];
                                            } else {
                                                $xy = "INSERT INTO `users` (`username`, `password`, `mail`, `rank`, `motto`, `account_created`, `last_login`, `look`, `home_room`, `ip_current`, `credits`, `ip_register`) VALUES ('$usuario', '$senhagerada', '$email', '1', '" . missao . "', '" . time() . "', '" . time() . "', '" . visual . "', '" . quartoinicial . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . creditos . "', '" . $_SERVER['REMOTE_ADDR'] . "');";
                                                $conn->query($xy);
                                                $_SESSION['usuario'] = $usuario;
                                                $_SESSION['senha'] = $senhagerada;
                                                exit(header("Location: /me"));
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    static function configuracoes($conn) {
        if (isset($_POST['enviar'])) {
            $missao = fs(rmdominio($_POST['missao']));
            $email = fs($_POST['email']);
            $confirmacao = fs($_POST['confirmacao']);
            $dc = fs(rmdominio($_POST['discord']));
            $capa = fs($_POST['capa']);
            $missaog = strlen($missao);
            $vlsalsa = 1;
            if ($missaog > 13 || $missaog < 1) {
                $_SESSION['erro'] = 'Sua missão deve conter mais de 2 caracteres e no máximo 13 caracteres.';
                $erro = 1;
            }
            else
            {
                $erro = 0;
            }
            $m = "UPDATE users SET motto='" . $missao . "' WHERE username='" . usuario . "'";
            $conn->query($m);
            if ($confirmacao != $email) {
                $qra = "SELECT * FROM users WHERE mail='" . $email . "'";
                if ($ra = mysqli_query($conn, $qra)) {
                    $existe = mysqli_num_rows($ra);
                    if ($existe == $vlsalsa) {
                        $_SESSION['erro'] = 'O e-mail  informado já está em uso, por gentileza escolha outro.';
                        $erro = 1;
                    }
                    mysqli_free_result($ra);
                }
                $m = "UPDATE users SET mail='" . $email . "' WHERE username='" . usuario . "'";
                $conn->query($m);
                $erro = 0;
            }
            if (!empty($dc)) {
                $qra = "SELECT * FROM users WHERE discord='" . $dc . "'";
                $vlsalsa = 1;
                if ($ra = mysqli_query($conn, $qra)) {
                    $existe = mysqli_num_rows($ra);
                    if ($existe == $vlsalsa) {
                        $_SESSION['erro'] = 'O discord informado já está em uso, por gentileza escolha outro.';
                        $erro = 1;
                    }
                    mysqli_free_result($ra);
                }
                $m = "UPDATE users SET discord='" . $dc . "' WHERE username='" . usuario . "'";
                $conn->query($m);
            }

            if (!empty($capa)) {
                $m = "UPDATE users SET capa='" . $capa . "' WHERE username='" . usuario . "'";
                $conn->query($m);
            }
            if (isset($erro)) {
                if ($erro == 1)
                {

                 $_SESSION['erro'] = $_SESSION['erro'];
             }
             else
             {
                  $_SESSION['erro'] = 'Configurações salvas com sucesso.';
             }
            } 
        }
    }
    static function publicar($conn) {
        if (isset($_POST['postar'])) {
            if (postagens == 0) {
                $_SESSION['erro'] = 'As publicações estão desativadas no momento.';
            } else {
                $sql31 = "SELECT * FROM users WHERE username='" . usuario . "'";
                $query10 = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
                while ($rows = $query10->fetch_assoc()) {
                    if ($rows['post_hoje'] == dia && $rows['rank'] == 1) {
                        $_SESSION['erro'] = 'Você só pode fazer uma publicação por dia.';
                        $erro = 1;
                    } else {
                        $postagem = fs(rmdominio($_POST['postagem']));
                        if (rank > 4) $staff = 1;
                        else $staff = 0;
                        $nome = usuario;
                        $data = strtotime("Now");
                        $roupa = roupanova;
                        if (empty($postagem)) {
                            $_SESSION['erro'] = 'Sua mensagem é inválida.';
                            $erro = 1;
                        } else {
                            if (isset($erro)) {
                                if ($erro == 1) echo $_SESSION['erro'];
                            } else {
                                $m = "INSERT INTO `salsa_posts` (`postagem`, `usuario`, `data`, `staff`, `look`) VALUES ('$postagem', '$nome', '$data', '$staff', '$roupa');";
                                $conn->query($m);
                                $_SESSION['erro'] = 'Você publicou <b>"' . $postagem . '"</b> com sucesso!';
                                $m2 = "UPDATE users SET post_hoje='" . dia . "' WHERE username='" . usuario . "'";
                                $conn->query($m2);
                            }
                        }
                    }
                }
            }
        }
    }
    static function comprarpontos($conn) {
        if (isset($_POST['comprar'])) {
            $sql31 = "SELECT * FROM users WHERE username='" . usuario . "'";
            $query10 = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
            while ($rows = $query10->fetch_assoc()) {
                $creditos = $rows['credits'];
                if ($creditos > 500000) {
                    $_SESSION['erro'] = 'Você comprou com sucesso!</div>';
                    $erro = 0;
                    $m = "UPDATE users SET credits = credits-500000 WHERE username = '" . usuario . "'";
                    $conn->query($m);
                    $m2 = "UPDATE `users_settings` SET `achievement_score` = '1000' WHERE `users_settings`.`user_id` = " . id . ";";
                    $conn->query($m2);
                    exit;
                } else {
                    $_SESSION['erro'] = 'Você não possui o valor necessário para adquirir o produto.';
                    $erro = 1;
                    if ($erro == 1) {
                        echo $_SESSION['erro'];
                    } elseif ($erro == 0) {
                        echo $_SESSION['erro'];
                    }
                }
            }
        }
    }
    static function buscar_usuario($conn) {
        if (isset($_POST['pesq'])) {
            $buscar = fs($_POST['usuariobus']);
            header("Location: /perfil?=$buscar");
            exit;
        }
    }
    static function recado($conn) {
        if (isset($_POST['enviar'])) {
            $recado = fs(rmdominio($_POST['recado']));
            $token1 = fs($_POST['token']);
            $token2 = fs($_POST['token_salsa']);
            if (empty($recado)) {
                $_SESSION['erro'] = 'Sua mensagem é inválida.';
                $erro = 1;
            } else {
                if ($token1 == $token2) {
                    if (isset($erro)) {
                        if ($erro == 1) echo $_SESSION['erro'];
                    } else {
                        $yeah = $token1;
                        $sql31 = "SELECT * FROM users WHERE username='" . usuario . "'";
                        $query10 = mysqli_query($conn, $sql31) or die(mysqli_error($conn));
                        while ($rows = $query10->fetch_assoc()) {
                            $visual = $rows['look'];
                            $nome = $rows['username'];
                            $m2 = "INSERT INTO `salsa_postagens` (`usuario`, `mensagem`, `look`, `data`, `donoperfil`) VALUES ('$nome', '$recado', '$visual', '" . strtotime("Now") . "', '$yeah');";
                            $conn->query($m2);
                            $_SESSION['erro'] = 'Você deixou um recado: "' . $recado . '" com sucesso!';
                        }
                    }
                }
            }
        }
    }
    static function curtir($conn) {
        if (isset($_POST['curtidas'])) {
            $vlr1 = fs($_POST['id']);
            $vlr2 = fs($_POST['usuario']);
            $m2 = "UPDATE salsa_posts SET curtidas = curtidas+1 WHERE id = '" . $vlr1 . "'";
            $conn->query($m2);
            $_SESSION['erro'] = 'Você curtiu a publicação com sucesso.';
        }
    }
    static function comentar_noticia($conn) {
        if (isset($_POST['comentar'])) {
            $vlr1 = fs($_POST['id']);
            $vlr2 = fs(rmdominio($_POST['mensagem']));
            if (empty($vlr2)) {
                $_SESSION['erro'] = 'Sua mensagem é inválida.';
            } else {
                $m2 = "INSERT INTO `salsa_comentarios_noticia` (`usuario`, `data`, `look`, `mensagem`, `noticia`) VALUES ('" . usuario . "', '" . time() . "', '" . roupanova . "', '$vlr2', '$vlr1');";
                $conn->query($m2);
                $_SESSION['erro'] = 'Você comentou ' . $vlr2 . '';
            }
        }
    }
    static function adicionar_amigo($conn) {
        if (isset($_POST['enviaramizade'])) {
            $vlr1 = fs($_POST['id']);
            $vlr2 = fs($_POST['id_dois']);
            $m2 = "INSERT INTO `messenger_friendrequests` (`user_to_id`, `user_from_id`) VALUES ('" . $vlr1 . "', '" . $vlr2 . "');";
            $conn->query($m2);
            $_SESSION['erro'] = 'Você enviou o convite com sucesso. Aguarde a outra parte aceitar.';
        }
    }
}
