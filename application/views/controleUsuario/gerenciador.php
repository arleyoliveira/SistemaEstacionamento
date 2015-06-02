<?php
	if($this->session->userdata('email') == '' || $this->session->userdata('email') == NULL):
	redirect("inicio/");
	endif;
		