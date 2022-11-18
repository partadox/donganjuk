<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function visitor()
	{
		//Get Datetime now
		$dt        = date("Y-m-d");
		$tm 	   = date("H:i:s");

		//Get IP
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //Checking IP From Shared Internet
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //To Check IP is Pass From Proxy
		{
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		$cek_visitor			= $this->visitor->cek_visitor($dt, $ip);
		if ($cek_visitor == 0) {
			$visitor = [
				'visitor_ip'      	=> $ip,
				'visitor_dt'        => $dt,
				'visitor_tm'        => $tm,
			];
			$this->visitor->insert($visitor);
		}
	}

	public function not_found()
	{
		$this->cachePage(360);
		$data = [
			'class_body' 		=> 'class="body-scroll d-flex flex-column h-100" data-page="404"',
		];
		return view('errors/404', $data);
	}

	public function index()
	{
		$this->visitor();
		$tgl  = date("d M Y");
		$data = [
			'class_body' 		=> 'class="body-scroll" data-page="index"',
			'tgl'				=> $tgl,
		];
		return view('index', $data);
	}

	public function splash()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="body-scroll d-flex flex-column h-100 dark-bg" data-page="splash"',
		];
		return view('v_splash', $data);
	}

	public function landing()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="body-scroll d-flex flex-column h-100" data-page="landing"',
		];
		return view('v_landing', $data);
	}

	public function detail()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="body-scroll" data-page="profile"',
		];
		return view('v_detail', $data);
		
	}

	public function cari()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="class="body-scroll" data-page="users"',
		];
		return view('v_cari', $data);
		
	}

	public function about()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="class="body-scroll" data-page="blank"',
		];
		return view('v_about', $data);
		
	}

	public function disclaimer()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="class="body-scroll" data-page="blank"',
		];
		return view('z_disclaimer', $data);
		
	}

	public function privacy()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="class="body-scroll" data-page="blank"',
		];
		return view('z_privacy', $data);
		
	}

	public function tos()
	{
		$this->visitor();
		$data = [
			'class_body' 		=> 'class="class="body-scroll" data-page="blank"',
		];
		return view('z_tos', $data);
		
	}

}
