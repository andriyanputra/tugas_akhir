 <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>static/img/favicon.ico">
  </head>

  <body>
<div class="container">

      <?php echo form_open('member/login'); ?>
    <div class="form-signin">
        <h2 class="form-signin-heading">Silahkan Login</h2>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input id="inputIcon" autocomplete="off" type="text" name="nip" class="input-block-level" placeholder="Nomor Induk Pegawai" required oninvalid="this.setCustomValidity('Enter NIP Here')" oninput="setCustomValidity('')" />
                </div>
           </div>
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span>
                    <input id="inputIcon" autocomplete="off" type="password" name="pass" class="input-block-level" placeholder="Password" required oninvalid="this.setCustomValidity('Enter Password Here')" oninput="setCustomValidity('')" />
                </div>
           </div>
        </div>

      <button class="btn btn-large btn-primary" type="submit">Sign in</button>  
    </div>
    <?php echo form_close(); ?> 

   
</div> <!-- /container -->
