<script type="text/javascript">
// <![CDATA[
var colours=new Array('lightyellow', 'gold', 'yellow', 'gold', 'lightyellow', 'yellow'); // colours of the stars
var minisize=12; // smallest size of stars in pixels
var maxisize=15; // biggest size of stars in pixels
var stars=66; // maximum number of stars on screen
var over_or_under="over"; // set to "over" for stars to always be on top, or "under" to allow them to float behind other objects

/*****************************
*JavaScript Love Heart Cursor*
*  (c)2013+ mf2fm web-design *
*   http://www.mf2fm.com/rv  *
*  DON'T EDIT BELOW THIS BOX *
*****************************/
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var herz=new Array();
var herzx=new Array();
var herzy=new Array();
var herzs=new Array();
var kiss=false;

if (typeof('addRVLoadEvent')!='function') function addRVLoadEvent(funky) {
  var oldonload=window.onload;
  if (typeof(oldonload)!='function') window.onload=funky;
  else window.onload=function() {
    if (oldonload) oldonload();
    funky();
  }
}

addRVLoadEvent(mwah);

function mwah() { if (document.getElementById) {
  var i, heart;
  for (i=0; i<stars; i++) {
    heart=createDiv("auto", "auto");
    heart.style.visibility="hidden";
  heart.style.zIndex=(over_or_under=="over")?"1001":"0";
    heart.style.color=colours[i%colours.length];
  heart.style.pointerEvents="none";
    if (navigator.appName=="Microsoft Internet Explorer") heart.style.filter="alpha(opacity=75)";
    else heart.style.opacity=0.75;
    heart.appendChild(document.createTextNode(String.fromCharCode(9733)));
    document.body.appendChild(heart);
    herz[i]=heart;
  herzy[i]=false;
  }
  set_scroll();
  set_width();
  herzle();
}}

function herzle() {
  var c;
  if (Math.abs(x-ox)>1 || Math.abs(y-oy)>1) {
    ox=x;
    oy=y;
    for (c=0; c<stars; c++) if (herzy[c]===false) {
    herz[c].firstChild.nodeValue=String.fromCharCode(9733);
      herz[c].style.left=(herzx[c]=x-minisize/2)+"px";
      herz[c].style.top=(herzy[c]=y-minisize)+"px";
      herz[c].style.fontSize=minisize+"px";
    herz[c].style.fontWeight='normal';
      herz[c].style.visibility='visible';
      herzs[c]=minisize;
      break;
    }
  }
  for (c=0; c<stars; c++) if (herzy[c]!==false) blow_me_a_kiss(c);
  setTimeout("herzle()", 40);
}

document.onmousedown=pucker;
document.onmouseup=function(){clearTimeout(kiss);};

function pucker() {
  ox=-1;
  oy=-1;
  kiss=setTimeout('pucker()', 100);
}

function blow_me_a_kiss(i) {
  herzy[i]-=herzs[i]/minisize+i%2;
  herzx[i]+=(i%5-2)/5;
  if (herzy[i]<sdown-herzs[i] || herzx[i]<sleft-herzs[i] || herzx[i]>sleft+swide-herzs[i]) {
    herz[i].style.visibility="hidden";
    herzy[i]=false;
  }
  else if (herzs[i]>minisize+2 && Math.random()<.5/stars) break_my_heart(i);
  else {
    if (Math.random()<maxisize/herzy[i] && herzs[i]<maxisize) herz[i].style.fontSize=(++herzs[i])+"px";
    herz[i].style.top=herzy[i]+"px";
    herz[i].style.left=herzx[i]+"px";
  }
}

function break_my_heart(i) {
  var t;
  herz[i].firstChild.nodeValue=String.fromCharCode(9676);
  herz[i].style.fontWeight='bold';
  herzy[i]=false;
  for (t=herzs[i]; t<=maxisize; t++) setTimeout('herz['+i+'].style.fontSize="'+t+'px"', 60*(t-herzs[i]));
  setTimeout('herz['+i+'].style.visibility="hidden";', 60*(t-herzs[i]));
}

document.onmousemove=mouse;
function mouse(e) {
  if (e) {
    y=e.pageY;
    x=e.pageX;
  }
  else {
    set_scroll();
    y=event.y+sdown;
    x=event.x+sleft;
  }
}

window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)=='number' && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

window.onscroll=set_scroll;
function set_scroll() {
  if (typeof(self.pageYOffset)=='number') {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
  }
  else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
  }
  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
    sdown=document.documentElement.scrollTop;
  }
  else {
    sdown=0;
    sleft=0;
  }
}

function createDiv(height, width) {
  var div=document.createElement("div");
  div.style.position="absolute";
  div.style.height=height;
  div.style.width=width;
  div.style.overflow="hidden";
  div.style.backgroundColor="transparent";
  return (div);
}
// ]]>
</script>

<html>
<marquee>AQUI VOCE VAI ENCONTRA OS DOWNLOADS DE APPS E IMAGENS E TUTORIAL PARA USAR O PAINEL. <br></marquee>
</html>


<?php
$procnoticias = "select * FROM noticias where status='ativo'";
$procnoticias = $conn->prepare($procnoticias);
$procnoticias->execute();

if ($usuario['tipo'] == 'revenda') {
  // Clientes
  $SQLbuscaclientes = "select * from usuario where tipo='vpn' and id_mestre='" . $usuario['id_usuario'] . "'";
  $SQLbuscaclientes = $conn->prepare($SQLbuscaclientes);
  $SQLbuscaclientes->execute();
  $totalclientes = $SQLbuscaclientes->rowCount();

  // Servidores
  $SQLbuscaservidores = "select * from acesso_servidor where id_usuario='" . $usuario['id_usuario'] . "'";
  $SQLbuscaservidores = $conn->prepare($SQLbuscaservidores);
  $SQLbuscaservidores->execute();
  $servidoresclientes = $SQLbuscaservidores->rowCount();

  // Cotas
  $totaldecotas = 0;
  $SQLbuscacontasssh = "select sum(qtd) as cotas from acesso_servidor where id_usuario='" . $usuario['id_usuario'] . "'";
  $SQLbuscacontasssh = $conn->prepare($SQLbuscacontasssh);
  $SQLbuscacontasssh->execute();
  $minhascotas = $SQLbuscacontasssh->fetch();
  $totaldecotas += $minhascotas['cotas'];
} else {
  // Contas
  $SQLbuscacontinhas = "select * from usuario_ssh where id_usuario='" . $usuario['id_usuario'] . "'";
  $SQLbuscacontinhas = $conn->prepare($SQLbuscacontinhas);
  $SQLbuscacontinhas->execute();
  $totalcontas = $SQLbuscacontinhas->rowCount();

  // Cotas
  $totaldecotas2 = 0;
  $SQLbuscacontasssh2 = "select sum(acesso) as cotas from usuario_ssh where id_usuario='" . $usuario['id_usuario'] . "'";
  $SQLbuscacontasssh2 = $conn->prepare($SQLbuscacontasssh2);
  $SQLbuscacontasssh2->execute();
  $minhascotas2 = $SQLbuscacontasssh2->fetch();
  $totaldecotas2 += $minhascotas2['cotas'];

  // Faturas
  if ($usuario['id_mestre'] == 0) {
    $SQLbuscafaturinhas = "select * from fatura where usuario_id='" . $usuario['id_usuario'] . "' and status='pendente'";
    $SQLbuscafaturinhas = $conn->prepare($SQLbuscafaturinhas);
    $SQLbuscafaturinhas->execute();
    $minhasfatu = $SQLbuscafaturinhas->rowCount();
  } else {
    // Faturas
    $SQLbuscafaturinhas = "select * from fatura_clientes where usuario_id='" . $usuario['id_usuario'] . "' and status='pendente'";
    $SQLbuscafaturinhas = $conn->prepare($SQLbuscafaturinhas);
    $SQLbuscafaturinhas->execute();
    $minhasfatu = $SQLbuscafaturinhas->rowCount();
  }
}

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
<?php
                        $SQLSubSSH = "SELECT * FROM acesso_servidor where id_usuario='".$usuario['id_usuario']."' ORDER BY id_usuario desc";
                        $SQLSubSSH = $conn->prepare($SQLSubSSH);
                        $SQLSubSSH->execute();
                        if(($SQLSubSSH->rowCount()) > 0){
                        while($row = $SQLSubSSH->fetch()){


                        $buscaserver = "SELECT * FROM servidor where id_servidor='".$row['id_servidor']."'";
                        $buscaserver = $conn->prepare($buscaserver);
                        $buscaserver->execute();
                        $servidor = $buscaserver->fetch();


                        $SQLAcessoSSH = "SELECT sum(acesso) AS quantidade  FROM usuario_ssh where id_servidor = '".$servidor['id_servidor']."'  and id_usuario='".$row['id_usuario']."' ";
                        $SQLAcessoSSH = $conn->prepare($SQLAcessoSSH);
                        $SQLAcessoSSH->execute();
                        $SQLAcessoSSH = $SQLAcessoSSH->fetch();
                        $acessos = $SQLAcessoSSH['quantidade'];
                        if($acessos==0){$acessos=0;}

                        $SQLUsuarioSSH = "SELECT * from usuario_ssh WHERE id_servidor = '".$servidor['id_servidor']."' and id_usuario='".$row['id_usuario']."'";
                        $SQLUsuarioSSH = $conn->prepare($SQLUsuarioSSH);
                        $SQLUsuarioSSH->execute();
                        $contas = $SQLUsuarioSSH->rowCount();
                        if($contas==0){$contas=0;}

                        //Calcula os dias restante
                        $data_atual = date("Y-m-d");
                        $data_validade = $row['validade'];
                        if($data_validade > $data_atual){
                            $data1 = new DateTime( $data_validade );
                            $data2 = new DateTime( $data_atual );
                            $dias_acesso = 0;
                            $diferenca = $data1->diff( $data2 );
                            $ano = $diferenca->y * 364 ;
                            $mes = $diferenca->m * 30;
                            $dia = $diferenca->d;
                            $dias_acesso = $ano + $mes + $dia;

                        }else{
                            $dias_acesso = 0;
                        }

                        $SQLopen = "select * from ovpn WHERE servidor_id = '".$row['id_servidor']."' ";
                        $SQLopen = $conn->prepare($SQLopen);
                        $SQLopen->execute();
                        if($SQLopen->rowCount()>0){
                            $openvpn=$SQLopen->fetch();
                            $texto="<a href='../admin/pages/servidor/baixar_ovpn.php?id=".$openvpn['id']."' class=\"label label-info\">Baixar</a>";
                        }else{
                            $texto="<span class=\"label label-danger\">Indisponivel</span>";
                        }


                        ?>
                        
                            <?php
                            }

                            }


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

<section id="dashboard-analytics">
  <style>
    .img-fluid {
      max-width: 100%;
      height: 100px;
	  background-image: url(https://tinypic.host/images/2023/02/05/51176444e7992898f5be7f90c447c6f9f6139d1b_hq.gif)    }
  </style>
  <div class="col-12">
    <div class="card card-profile border-primary">
      <img src="" class="img-fluid ">
      <div class="card-body">
        <div class="profile-image-wrapper">
          <div class="profile-image">
            <div class="avatar-content">
              <img src="../../../app-assets/images/avatars/<?php echo $avatarusu; ?>" alt="user">
            </div>
          </div>
        </div>
        <h3><br>BEM VINDOª</br> LOJA DE DOWNLOADS </h3>
		<a class="dropdown-item" href="?page=servidor/listar"><i class="me-50" data-feather="calendar"></i>Seu Painel expira em: <span class="badge badge-light-info rounded-pill ms-auto me-1"><?php echo $dias_acesso." dias"; ?></span></a>
        <span class="badge badge-light-primary profile-badge">
<?php echo strtoupper($usuario['nome']); ?>
          <?php if ($usuario['subrevenda'] <> 'sim') {
            echo 'Revendedor';
          } else {
            echo 'Sub Revendedor';
          } ?>
        </span>
      </div>
    </div>
  </div>
</section>
</html>
<!-- Dashboard Analytics end -->
<section id="statistics-card">
  <div class="row">
  <?php if (($usuario['tipo'] == "revenda") and ($acesso_servidor > 0)) { ?>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card border-primary">
        <a href="https://drive.google.com/drive/folders/1oJA87PuLuK5swtmvVCBw__UEVEoQc5n4">
          <div class="card-header d-flex flex-column align-items-center pb-0">
            <div class="avatar bg-light-success avatar-xl">
              <div class="avatar-content">
               <img src="https://tinypic.host/images/2023/02/02/3357569.png">
              </div>
            </div>
            <h4 class="text-bold-700 mt-1">BAIXAR IMAGENS PARA DIVULGAR</h4>
            <p class="mb-2"></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card border-primary">
        <a href="home.php?page=downloads/downloads">
          <div class="card-header d-flex flex-column align-items-center pb-0">
            <div class="avatar bg-light-warning avatar-xl">
              <div class="avatar-content">
                <img src="https://tinypic.host/images/2023/01/31/google-play.png">
              </div>
            </div>
            <h4 class="text-bold-700 mt-1">BAIXAR APLICATIVO</h4>
            <p class="mb-2"></p>
          </div>
        </a>
      </div>
    </div>
	<?php } ?>
    <?php if ($usuario['subrevenda'] <> 'sim') { ?>
      <div class="col-lg-3 col-sm-6 col-12">
        <div class="card border-primary">
          <a href="home.php?page=img/tutorial">
            <div class="card-header d-flex flex-column align-items-center pb-0">
              <div class="avatar bg-light-info avatar-xl">
                <div class="avatar-content">
                 <img src="https://tinypic.host/images/2023/02/02/images.png">

                </div>
              </div>
              <h4 class="text-bold-700 mt-1">APRENDA A USAR O PAINEL</h4>
              <p class="mb-2"></p>
            </div>
          </a>
        </div>
      </div>
    <?php } ?>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card border-primary">
        <a href="home.php?page=img/tabela">
          <div class="card-header d-flex flex-column align-items-center pb-0">
            <div class="avatar bg-light-success avatar-xl">
              <div class="avatar-content">
                <img src="https://tinypic.host/images/2023/02/02/222-2229025_tabelas-de-ligas-de-alumnio-especificas-administratie-icon-1.png">
              </div>
            </div>
            <h4 class="text-bold-700 mt-1">TABELA DE VALORES DE CREDITOS</h4>
            <p class="mb-2"></p>
          </div>
        </a>
      </div>
    </div>
