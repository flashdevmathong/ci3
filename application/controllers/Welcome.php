<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    
	public function index()
	{
		// $html=$this->load->view('mypdfLayout',"", true);
		// $pdfFilename = "myfilename.pdf";
		// $this->load->library('m_pdf');
		// $this->m_pdf->pdf->WriteHTML($html);
		// $this->m_pdf->pdf->Output($pdfFilename, "D");
		return  redirect(base_url('login'));		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
