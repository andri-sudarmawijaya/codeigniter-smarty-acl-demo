<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tchainhoist extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tchainhoist_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('tchainhoist/TChainHoist_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tchainhoist_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tchainhoist_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'suket_no' => $row->suket_no,
		'lap_nama_perusahaan' => $row->lap_nama_perusahaan,
		'lap_nama_pemakai' => $row->lap_nama_pemakai,
		'digunakan_untuk' => $row->digunakan_untuk,
		'tinggi_angkat' => $row->tinggi_angkat,
		'hoisting_speed' => $row->hoisting_speed,
		'hoisting_motor' => $row->hoisting_motor,
		'panjang_travelling' => $row->panjang_travelling,
		'tinggi_girder' => $row->tinggi_girder,
		'panjang_span' => $row->panjang_span,
		'chain a' => $row->chain a,
		'chain b' => $row->chain b,
		'chain c' => $row->chain c,
		'chain d' => $row->chain d,
		'chain e' => $row->chain e,
		'chain f' => $row->chain f,
		'corrosion' => $row->corrosion,
		'wear' => $row->wear,
		'crack' => $row->crack,
		'deformation' => $row->deformation,
		'hook a' => $row->hook a,
		'hook b' => $row->hook b,
		'hook c' => $row->hook c,
	    );
            $this->load->view('tchainhoist/TChainHoist_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tchainhoist'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tchainhoist/create_action'),
	    'id' => set_value('id'),
	    'suket_no' => set_value('suket_no'),
	    'lap_nama_perusahaan' => set_value('lap_nama_perusahaan'),
	    'lap_nama_pemakai' => set_value('lap_nama_pemakai'),
	    'digunakan_untuk' => set_value('digunakan_untuk'),
	    'tinggi_angkat' => set_value('tinggi_angkat'),
	    'hoisting_speed' => set_value('hoisting_speed'),
	    'hoisting_motor' => set_value('hoisting_motor'),
	    'panjang_travelling' => set_value('panjang_travelling'),
	    'tinggi_girder' => set_value('tinggi_girder'),
	    'panjang_span' => set_value('panjang_span'),
	    'chain a' => set_value('chain a'),
	    'chain b' => set_value('chain b'),
	    'chain c' => set_value('chain c'),
	    'chain d' => set_value('chain d'),
	    'chain e' => set_value('chain e'),
	    'chain f' => set_value('chain f'),
	    'corrosion' => set_value('corrosion'),
	    'wear' => set_value('wear'),
	    'crack' => set_value('crack'),
	    'deformation' => set_value('deformation'),
	    'hook a' => set_value('hook a'),
	    'hook b' => set_value('hook b'),
	    'hook c' => set_value('hook c'),
	);
        $this->load->view('tchainhoist/TChainHoist_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'suket_no' => $this->input->post('suket_no',TRUE),
		'lap_nama_perusahaan' => $this->input->post('lap_nama_perusahaan',TRUE),
		'lap_nama_pemakai' => $this->input->post('lap_nama_pemakai',TRUE),
		'digunakan_untuk' => $this->input->post('digunakan_untuk',TRUE),
		'tinggi_angkat' => $this->input->post('tinggi_angkat',TRUE),
		'hoisting_speed' => $this->input->post('hoisting_speed',TRUE),
		'hoisting_motor' => $this->input->post('hoisting_motor',TRUE),
		'panjang_travelling' => $this->input->post('panjang_travelling',TRUE),
		'tinggi_girder' => $this->input->post('tinggi_girder',TRUE),
		'panjang_span' => $this->input->post('panjang_span',TRUE),
		'chain a' => $this->input->post('chain a',TRUE),
		'chain b' => $this->input->post('chain b',TRUE),
		'chain c' => $this->input->post('chain c',TRUE),
		'chain d' => $this->input->post('chain d',TRUE),
		'chain e' => $this->input->post('chain e',TRUE),
		'chain f' => $this->input->post('chain f',TRUE),
		'corrosion' => $this->input->post('corrosion',TRUE),
		'wear' => $this->input->post('wear',TRUE),
		'crack' => $this->input->post('crack',TRUE),
		'deformation' => $this->input->post('deformation',TRUE),
		'hook a' => $this->input->post('hook a',TRUE),
		'hook b' => $this->input->post('hook b',TRUE),
		'hook c' => $this->input->post('hook c',TRUE),
	    );

            $this->Tchainhoist_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tchainhoist'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tchainhoist_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tchainhoist/update_action'),
		'id' => set_value('id', $row->id),
		'suket_no' => set_value('suket_no', $row->suket_no),
		'lap_nama_perusahaan' => set_value('lap_nama_perusahaan', $row->lap_nama_perusahaan),
		'lap_nama_pemakai' => set_value('lap_nama_pemakai', $row->lap_nama_pemakai),
		'digunakan_untuk' => set_value('digunakan_untuk', $row->digunakan_untuk),
		'tinggi_angkat' => set_value('tinggi_angkat', $row->tinggi_angkat),
		'hoisting_speed' => set_value('hoisting_speed', $row->hoisting_speed),
		'hoisting_motor' => set_value('hoisting_motor', $row->hoisting_motor),
		'panjang_travelling' => set_value('panjang_travelling', $row->panjang_travelling),
		'tinggi_girder' => set_value('tinggi_girder', $row->tinggi_girder),
		'panjang_span' => set_value('panjang_span', $row->panjang_span),
		'chain a' => set_value('chain a', $row->chain a),
		'chain b' => set_value('chain b', $row->chain b),
		'chain c' => set_value('chain c', $row->chain c),
		'chain d' => set_value('chain d', $row->chain d),
		'chain e' => set_value('chain e', $row->chain e),
		'chain f' => set_value('chain f', $row->chain f),
		'corrosion' => set_value('corrosion', $row->corrosion),
		'wear' => set_value('wear', $row->wear),
		'crack' => set_value('crack', $row->crack),
		'deformation' => set_value('deformation', $row->deformation),
		'hook a' => set_value('hook a', $row->hook a),
		'hook b' => set_value('hook b', $row->hook b),
		'hook c' => set_value('hook c', $row->hook c),
	    );
            $this->load->view('tchainhoist/TChainHoist_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tchainhoist'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'suket_no' => $this->input->post('suket_no',TRUE),
		'lap_nama_perusahaan' => $this->input->post('lap_nama_perusahaan',TRUE),
		'lap_nama_pemakai' => $this->input->post('lap_nama_pemakai',TRUE),
		'digunakan_untuk' => $this->input->post('digunakan_untuk',TRUE),
		'tinggi_angkat' => $this->input->post('tinggi_angkat',TRUE),
		'hoisting_speed' => $this->input->post('hoisting_speed',TRUE),
		'hoisting_motor' => $this->input->post('hoisting_motor',TRUE),
		'panjang_travelling' => $this->input->post('panjang_travelling',TRUE),
		'tinggi_girder' => $this->input->post('tinggi_girder',TRUE),
		'panjang_span' => $this->input->post('panjang_span',TRUE),
		'chain a' => $this->input->post('chain a',TRUE),
		'chain b' => $this->input->post('chain b',TRUE),
		'chain c' => $this->input->post('chain c',TRUE),
		'chain d' => $this->input->post('chain d',TRUE),
		'chain e' => $this->input->post('chain e',TRUE),
		'chain f' => $this->input->post('chain f',TRUE),
		'corrosion' => $this->input->post('corrosion',TRUE),
		'wear' => $this->input->post('wear',TRUE),
		'crack' => $this->input->post('crack',TRUE),
		'deformation' => $this->input->post('deformation',TRUE),
		'hook a' => $this->input->post('hook a',TRUE),
		'hook b' => $this->input->post('hook b',TRUE),
		'hook c' => $this->input->post('hook c',TRUE),
	    );

            $this->Tchainhoist_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tchainhoist'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tchainhoist_model->get_by_id($id);

        if ($row) {
            $this->Tchainhoist_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tchainhoist'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tchainhoist'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('suket_no', 'suket no', 'trim|required');
	$this->form_validation->set_rules('lap_nama_perusahaan', 'lap nama perusahaan', 'trim|required');
	$this->form_validation->set_rules('lap_nama_pemakai', 'lap nama pemakai', 'trim|required');
	$this->form_validation->set_rules('digunakan_untuk', 'digunakan untuk', 'trim|required');
	$this->form_validation->set_rules('tinggi_angkat', 'tinggi angkat', 'trim|required|numeric');
	$this->form_validation->set_rules('hoisting_speed', 'hoisting speed', 'trim|required|numeric');
	$this->form_validation->set_rules('hoisting_motor', 'hoisting motor', 'trim|required|numeric');
	$this->form_validation->set_rules('panjang_travelling', 'panjang travelling', 'trim|required|numeric');
	$this->form_validation->set_rules('tinggi_girder', 'tinggi girder', 'trim|required|numeric');
	$this->form_validation->set_rules('panjang_span', 'panjang span', 'trim|required|numeric');
	$this->form_validation->set_rules('chain a', 'chain a', 'trim|required|numeric');
	$this->form_validation->set_rules('chain b', 'chain b', 'trim|required|numeric');
	$this->form_validation->set_rules('chain c', 'chain c', 'trim|required|numeric');
	$this->form_validation->set_rules('chain d', 'chain d', 'trim|required|numeric');
	$this->form_validation->set_rules('chain e', 'chain e', 'trim|required|numeric');
	$this->form_validation->set_rules('chain f', 'chain f', 'trim|required|numeric');
	$this->form_validation->set_rules('corrosion', 'corrosion', 'trim|required');
	$this->form_validation->set_rules('wear', 'wear', 'trim|required');
	$this->form_validation->set_rules('crack', 'crack', 'trim|required');
	$this->form_validation->set_rules('deformation', 'deformation', 'trim|required');
	$this->form_validation->set_rules('hook a', 'hook a', 'trim|required|numeric');
	$this->form_validation->set_rules('hook b', 'hook b', 'trim|required|numeric');
	$this->form_validation->set_rules('hook c', 'hook c', 'trim|required|numeric');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "TChainHoist.xls";
        $judul = "TChainHoist";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Suket No");
	xlsWriteLabel($tablehead, $kolomhead++, "Lap Nama Perusahaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Lap Nama Pemakai");
	xlsWriteLabel($tablehead, $kolomhead++, "Digunakan Untuk");
	xlsWriteLabel($tablehead, $kolomhead++, "Tinggi Angkat");
	xlsWriteLabel($tablehead, $kolomhead++, "Hoisting Speed");
	xlsWriteLabel($tablehead, $kolomhead++, "Hoisting Motor");
	xlsWriteLabel($tablehead, $kolomhead++, "Panjang Travelling");
	xlsWriteLabel($tablehead, $kolomhead++, "Tinggi Girder");
	xlsWriteLabel($tablehead, $kolomhead++, "Panjang Span");
	xlsWriteLabel($tablehead, $kolomhead++, "Chain A");
	xlsWriteLabel($tablehead, $kolomhead++, "Chain B");
	xlsWriteLabel($tablehead, $kolomhead++, "Chain C");
	xlsWriteLabel($tablehead, $kolomhead++, "Chain D");
	xlsWriteLabel($tablehead, $kolomhead++, "Chain E");
	xlsWriteLabel($tablehead, $kolomhead++, "Chain F");
	xlsWriteLabel($tablehead, $kolomhead++, "Corrosion");
	xlsWriteLabel($tablehead, $kolomhead++, "Wear");
	xlsWriteLabel($tablehead, $kolomhead++, "Crack");
	xlsWriteLabel($tablehead, $kolomhead++, "Deformation");
	xlsWriteLabel($tablehead, $kolomhead++, "Hook A");
	xlsWriteLabel($tablehead, $kolomhead++, "Hook B");
	xlsWriteLabel($tablehead, $kolomhead++, "Hook C");

	foreach ($this->Tchainhoist_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->suket_no);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lap_nama_perusahaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->lap_nama_pemakai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->digunakan_untuk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tinggi_angkat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hoisting_speed);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hoisting_motor);
	    xlsWriteNumber($tablebody, $kolombody++, $data->panjang_travelling);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tinggi_girder);
	    xlsWriteNumber($tablebody, $kolombody++, $data->panjang_span);
	    xlsWriteNumber($tablebody, $kolombody++, $data->chain a);
	    xlsWriteNumber($tablebody, $kolombody++, $data->chain b);
	    xlsWriteNumber($tablebody, $kolombody++, $data->chain c);
	    xlsWriteNumber($tablebody, $kolombody++, $data->chain d);
	    xlsWriteNumber($tablebody, $kolombody++, $data->chain e);
	    xlsWriteNumber($tablebody, $kolombody++, $data->chain f);
	    xlsWriteLabel($tablebody, $kolombody++, $data->corrosion);
	    xlsWriteLabel($tablebody, $kolombody++, $data->wear);
	    xlsWriteLabel($tablebody, $kolombody++, $data->crack);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deformation);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hook a);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hook b);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hook c);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=TChainHoist.doc");

        $data = array(
            'TChainHoist_data' => $this->Tchainhoist_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tchainhoist/TChainHoist_doc',$data);
    }

}

/* End of file Tchainhoist.php */
/* Location: ./application/controllers/Tchainhoist.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-07-30 15:59:38 */
/* http://harviacode.com */