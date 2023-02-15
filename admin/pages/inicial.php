<?php
$procnoticias = "select * FROM noticias where status='ativo'";
$procnoticias = $conn->prepare($procnoticias);
$procnoticias->execute();


// Clientes
$SQLbuscaclientes = "select * from usuario where tipo='vpn'";
$SQLbuscaclientes = $conn->prepare($SQLbuscaclientes);
$SQLbuscaclientes->execute();
$totalclientes = $SQLbuscaclientes->rowCount();
// Revendedores
$SQLbuscarevendedores = "select * from  usuario where tipo='revenda'";
$SQLbuscarevendedores = $conn->prepare($SQLbuscarevendedores);
$SQLbuscarevendedores->execute();
$totalrevendedores = $SQLbuscarevendedores->rowCount();
// Servidores
$SQLbuscaservidores = "select * from  servidor";
$SQLbuscaservidores = $conn->prepare($SQLbuscaservidores);
$SQLbuscaservidores->execute();
$totalservidores = $SQLbuscaservidores->rowCount();

?>


<!-- Noticias -->
<?php if ($procnoticias->rowCount() > 0) {
    $noticia = $procnoticias->fetch();

    $datapega = $noticia['data'];
    $data = date('D', strtotime($datapega));
    $mes = date('M', strtotime($datapega));
    $dia = date('d', strtotime($datapega));
    $ano = date('Y', strtotime($datapega));

    $semana = array(
        'Sun' => 'Domingo',
        'Mon' => 'Segunda-Feira',
        'Tue' => 'Terça-Feira',
        'Wed' => 'Quarta-Feira',
        'Thu' => 'Quinta-Feira',
        'Fri' => 'Sexta-Feira',
        'Sat' => 'Sábado'
    );

    $mes_extenso = array(
        'Jan' => 'Janeiro',
        'Feb' => 'Fevereiro',
        'Mar' => 'Marco',
        'Apr' => 'Abril',
        'May' => 'Maio',
        'Jun' => 'Junho',
        'Jul' => 'Julho',
        'Aug' => 'Agosto',
        'Sep' => 'Setembro',
        'Oct' => 'Outubro',
        'Nov' => 'Novembro',
        'Dec' => 'Dezembro'
    );


?>

    <div class="demo-spacing-0 text-center mb-2">
        <div class="alert alert-primary alert-dismissible" role="alert">
            <h2 class="alert-heading text-warning"><i data-feather='alert-octagon'></i> <?php echo $noticia['titulo']; ?></h2>
            <div class="alert-body text-warning">
                <?php echo $noticia['subtitulo']; ?> <br />
                <?php echo $noticia['msg']; ?><br />
                <?php echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";; ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>

<?php } ?>

<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
    <style>
        .img-fluid {
            max-width: 100%;
            height: 100px;			  
			background-image: url(https://tinypic.host/images/2023/02/05/51176444e7992898f5be7f90c447c6f9f6139d1b_hq.gif)
        }
    </style>
    <div class="col-12">
        <div class="card card-profile border-primary">
            <img src="" class="img-fluid ">
            <div class="card-body">
                <div class="profile-image-wrapper">
                    <div class="profile-image">
                        <div class="avatar-content">
                            <img src="https://tinypic.host/images/2023/02/03/LOGO-OFICIAL-NETSPEED4G.png" alt="user">
                        </div>
                    </div>
                </div>
                <h3> <?php echo strtoupper($administrador['nome']); ?></h1>
                <span class="badge badge-light-primary profile-badge">Administrador</span>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Analytics end -->

<section id="statistics-card">
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=ssh/adicionar">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-success avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/download.png">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1">Criar Conta ssh</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=ssh/add_teste">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-warning avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/7659007.png">

                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1">Criar Teste ssh</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=usuario/1-etapa">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-info avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/236822.png">                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1">Criar Revenda</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=ssh/online">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-success avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/icon-512x512.png">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $total_acesso_ssh_online; ?> Online</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=usuario/revenda">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-info avatar-xl">
                            <div class="avatar-content">
                <img src="https://tinypic.host/images/2023/01/31/1802743.png">                           </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $all_usuarios_revenda_qtd; ?> Revenda</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=ssh/contas">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-success avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/5065003.png">                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1 mb-25"><?php echo $contas_ssh; ?> Contas SSH</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=servidor/listar">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-warning avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/4544a6bb816c2e70ca55f663a3a68866-icone-do-circulo-do-servidor.png">

                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $servidor_qtd; ?> Servidores</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=ssh/suspenso">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-danger avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/simbolo-de-proibicao-g-sem-sinal-onda-fio-isolado-em-fundo-branco-do-comunicacao-moderna-parar-o-desenvolvimento-da-208505115.jpg">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $ssh_susp_qtd; ?> Contas SSH Susp.</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=usuario/revenda">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-danger avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/4484303.png">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $revenda_qtd_susp; ?> Revenda Susp.</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=chamados/abertas">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-warning avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/1046570.png">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $all_chamados; ?> Tickets</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=notificacoes/notificacoes&ler=all">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-danger avatar-xl">
                            <div class="avatar-content">
                                <img src="https://tinypic.host/images/2023/01/31/4812509.png">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $totalnoti; ?> Notificações</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card border-primary">
                <a href="home.php?page=download/downloads">
                    <div class="card-header d-flex flex-column align-items-center pb-0">
                        <div class="avatar bg-light-primary avatar-xl">
                            <div class="avatar-content">
                               <img src="https://tinypic.host/images/2023/01/31/google-play.png">
                            </div>
                        </div>
                        <h4 class="text-bold-700 mt-1"><?php echo $todosarquivos; ?> Arquivos</h4>
                        <p class="mb-2"></p>
                    </div>
                </a>
            </div>
        </div>
</section>