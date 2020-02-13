
  <div class="well">
    <h4> Welcome <?= $username ?></h4>
    
  </div>
  <div class="content" style="background-color: #FFF;">

    <div class="row text-center" style="margin: 2% 0">



	    <a href="<?= $this->Url->build(['plugin' => false, 'controller' => 'users', 'action' => 'index']) ?>">
	        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	        <i class="fa fa-users fa-5x" aria-hidden="true"></i><br>
	            Users
	        </div>
	    </a>


	</div>
	<div class="row text-center" style="margin: 4% 0">

	</div>
  </div>