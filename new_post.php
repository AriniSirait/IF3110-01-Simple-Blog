<!DOCTYPE html>
<html>
<head>
<?php
    require('include/header.php');
?>
<title>Simple Blog | Tambah Post</title>
</head>

<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Simple<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.html">+ Tambah Post</a></li>
    </ul>
</nav>

<article class="art simple post">
    
    
    <h2 class="art-title" style="margin-bottom:40px">-</h2>

    <div class="art-body">
        <div class="art-body-inner">
            <?php if(isset($_GET['msg'])){ ?>
                <div class="valid_box">
                    <?php echo  "<h7>"."<center>".$_GET['msg']."</center>" ."</h7>"; ?>
                </div>
            <?php }?>
            <h2>Tambah Post</h2>
            
            <div id="contact-area">
                <form method="post" action="action/do_new_post.php">
                    <label for="Judul">Judul:</label>
                    <input type="text" name="judul" id="judul">

                    <label for="Tanggal">Tanggal:</label>
                    <input type="date" name="tanggal" id="tanggal" onchange="dateValidation()">
                    
                    <label for="Konten">Konten:</label><br>
                    <textarea name="konten" rows="20" cols="20" id="konten" disabled></textarea>

                    <input type="submit" name="submit"l vaue="Simpan" class="submit-button">
                </form>
            </div>
        </div>
    </div>

</article>

<?php
    require('include/footer.php');
?>

</div>

<script type="text/javascript" src="assets/js/beberapascript.js"></script>
<script type="text/javascript" src="assets/js/fittext.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>
<script type="text/javascript">
  var ga_ua = '{{! TODO: ADD GOOGLE ANALYTICS UA HERE }}';

  (function(g,h,o,s,t,z){g.GoogleAnalyticsObject=s;g[s]||(g[s]=
      function(){(g[s].q=g[s].q||[]).push(arguments)});g[s].s=+new Date;
      t=h.createElement(o);z=h.getElementsByTagName(o)[0];
      t.src='//www.google-analytics.com/analytics.js';
      z.parentNode.insertBefore(t,z)}(window,document,'script','ga'));
      ga('create',ga_ua);ga('send','pageview'); 
</script>


</body>
</html>