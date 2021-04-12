<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
        <a class="nav-link" href="#">admin <span class="sr-only">(current)</span></a>
      </li>

			<?php
				if(!$this->session->has_userdata('authenticated'))
				{	
			?>
      <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('register')?>">register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login')?>">login</a>
      </li>
			<?php
		   }
			?>    
     <?php
				if($this->session->has_userdata('authenticated'))
				{	
			?>
			  <li class="nav-item">
        <a class="nav-link" href="<?= base_url('userpage')?>">page user</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="<?= base_url('adminpage')?>">page admin</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?= $this->session->userdata('auth_user')['first_name'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?= $this->session->userdata('auth_user')['last_name'];?></a>
					<a class="dropdown-item" href="<?= base_url('logout')?>">login</a>
      </li>
			<?php
		   }
			?>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
