
<!DOCTYPE html>
<html>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/pure/1.0.0/pure-min.css" />
<link rel="stylesheet" media="screen" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Montserrat+Alternates:400,700|Dosis:600,700,800" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resource/css/bootstrap.min.css'); ?>">
<style>
  * { box-sizing: border-box }

  body {
    font-family: Lato;
    margin: 0;
    color:#333;
  }
  h1  { }
  p {
    font-size:16px;
    line-height:22px;
    color:#555;
  }
  .lo-container {
    max-width:80%;
    margin: 0 auto;
    padding:0 3%;
  }
  header {
    height:130px;
    background-color: #444;
    background-size:cover;
    background-position:bottom;
    border-bottom:1px solid #ddd;
    padding:30px 0;
    margin-bottom:30px;
  }
  header .lo-container {
    height:100%;
  }
  header img {
    border-radius:100%;
    display:block;
    height:100%;
    float:left;
    margin-right:10px;
  }
  h1 {
    padding-top:9px;
    margin:0 0 7px 0;
    font-size:28px;
    line-height:28px;
    color:#333;
  }
  h2 {
    margin:0;
    font-size:16px;
    line-height:16px;
    font-weight:400;
    color:#333;
  }
  h3 {
    margin:0 0 10px 0;
  }
  h4 {
    margin:0 0 10px 0;
  }
  p {
    margin: 0 0 15px 0;
  }
  p+h4 {
    margin-top:20px;
  }
  p a {
    color:#333;
    font-weight:500;
  }
  section {
    margin-bottom:20px;
  }
  section+section {
    border-top:1px solid #ddd;
    padding-top:20px;
  }
</style>
</head>
<body>
<header>
<div class='lo-container'>
<img src="<?php echo base_url('resource/image/30704253_1690007031065512_2115419960493735936_n.jpg'); ?>">
<h1 style="color: #ffffff;">Amit Biswas</h1>
<h2 style="color: #ffffff;">Social Entrepeneur & iOS Engineer</h2>
</div>
</header>
<?php                    
if(isset($_view) && $_view)
    $this->load->view($_view);
?>
<footer style="height: 69px; background-color: #444; color: #ffffff; align-content: center;">
  <div class="row-container style-dark-bg footer-last">
    <div class="row row-parent style-dark limit-width no-top-padding no-h-padding no-bottom-padding">
      <div style="vertical-align: center; padding-bottom: 27px;padding-top: 27px; padding-left: 36px;font-family: Sans-Serif; font-size: 13px; font-weight: 400%;" class="site-info uncell col-lg-6 pos-middle text-left">&copy;2018 Amit Biswas. All rights reserved.</div><div class="uncell col-lg-6 pos-middle text-right"></div>
    </div>
  </div>
</footer>
<script type="text/javascript" src=""<?php echo base_url('resource/js/bootstrap.min.js'); ?>""></script>
</body>
</html>