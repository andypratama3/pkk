<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
        verify_session();
        verify_bendahara();
        $this->load->model('Keuangan_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
    }
	public function index()
	{
		$data = array(
			'keuangan_list' => $this->Keuangan_model->get_all(),
		);
		$this->template->load('template','keuangan/keuangan_list', $data);
	}
	public function read($id)
	{	
		$row = $this->Keuangan_model->get_by_id($id);
        if ($row) {
            $data = array(                
                'id' => $row->id,
				'tanggal1' => $row->tanggal1,
				'sumber_dana1' => $row->sumber_dana1,
				'uraian1' => $row->uraian1,
				'no_bukti_kas1' => $row->no_bukti_kas1,
				'jml_penerimaan' => $row->jml_penerimaan,
				'no_urut_pengeluaran' => $row->no_urut_pengeluaran,
				'tanggal2' => $row->tanggal2,
				'sumber_dana2' => $row->sumber_dana2,
				'uraian2' => $row->uraian2,
				'no_bukti_kas2' => $row->no_bukti_kas2,
				'jml_pengeluaran' => $row->jml_pengeluaran,
            );
            $this->template->load('template','keuangan/keuangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Tidak Ditemukan');
            redirect(site_url('keuangan'));
        }
	}
	public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('keuangan/create_action'),
            'id' => set_value('id'),
            'tanggal1' => set_value('tanggal1'),
            'sumber_dana1' => set_value('sumber_dana1'),
            'uraian1' => set_value('uraian1'),
            'no_bukti_kas1' => set_value('no_bukti_kas1'),
            'jml_penerimaan' => set_value('jml_penerimaan'),
            'no_urut_pengeluaran' => set_value('no_urut_pengeluaran'),
            'tanggal2' => set_value('tanggal2'),
            'sumber_dana2' => set_value('sumber_dana2'),
			'uraian2' => set_value('uraian2'),
            'no_bukti_kas2' => set_value('no_bukti_kas2'),
            'jml_pengeluaran' => set_value('jml_pengeluaran'),
        );
        $this->template->load('template','keuangan/keuangan_form', $data);
    }
	public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
		} else {
			$data = array(
				'tanggal1' => $this->input->post('tanggal1'),
				'sumber_dana1' => $this->input->post('sumber_dana1'),
				'uraian1' => $this->input->post('uraian1'),
				'no_bukti_kas1' => $this->input->post('no_bukti_kas1'),
				'jml_penerimaan' => $this->input->post('jml_penerimaan'),
				'no_urut_pengeluaran' => $this->input->post('no_urut_pengeluaran'),
				'tanggal2' => $this->input->post('tanggal2'),
				'sumber_dana2' => $this->input->post('sumber_dana2'),
				'uraian2' => $this->input->post('uraian2'),
				'no_bukti_kas2' => $this->input->post('no_bukti_kas2'),
				'jml_pengeluaran' => $this->input->post('jml_pengeluaran'),
			);
			$this->Keuangan_model->insert($data);
			$this->session->set_flashdata('message', 'Berhasil Tambah Data');
			redirect(site_url('keuangan'));
		}
	}
	public function update($id) 
    {
        $row = $this->Keuangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
				'action' => site_url('keuangan/update_action'),
				'id' => set_value('id', $row->id),
				'tanggal1' => set_value('tanggal1', $row->tanggal1),
				'sumber_dana1' => set_value('tanggal1', $row->sumber_dana1),
				'uraian1' => set_value('uraian1', $row->uraian1),
				'no_bukti_kas1' => set_value('no_bukti_kas1', $row->no_bukti_kas1),
				'jml_penerimaan' => set_value('jml_penerimaan', $row->jml_penerimaan),
				'no_urut_pengeluaran' => set_value('no_urut_pengeluaran', $row->no_urut_pengeluaran),
				'tanggal2' => set_value('tanggal2', $row->tanggal2),
				'sumber_dana2' => set_value('sumber_dana2', $row->sumber_dana2),
				'uraian2' => set_value('uraian2', $row->uraian2),
				'no_bukti_kas2' => set_value('no_bukti_kas2', $row->no_bukti_kas2),
				'jml_pengeluaran' => set_value('jml_pengeluaran', $row->jml_pengeluaran),
			);
            $this->template->load('template','keuangan/keuangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Tidak Ditemukan');
            redirect(site_url('kader'));
        }
    }
	public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
				'tanggal1' => $this->input->post('tanggal1', TRUE),
				'sumber_dana1' => $this->input->post('sumber_dana1', TRUE),
				'uraian1' => $this->input->post('uraian1', TRUE),
				'no_bukti_kas1' => $this->input->post('no_bukti_kas1', TRUE),
				'jml_penerimaan' => $this->input->post('jml_penerimaan', TRUE),
				'no_urut_pengeluaran' => $this->input->post('no_urut_pengeluaran', TRUE),
				'tanggal2' => $this->input->post('tanggal2', TRUE),
				'sumber_dana2' => $this->input->post('sumber_dana2', TRUE),
				'uraian2' => $this->input->post('uraian2', TRUE),
				'no_bukti_kas2' => $this->input->post('no_bukti_kas2', TRUE),
				'jml_pengeluaran' => $this->input->post('jml_pengeluaran', TRUE),
			);

            $this->Keuangan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Berhasil Edit Data');
            redirect(site_url('keuangan'));
        }
    }
	public function delete($id) 
    {
        $row = $this->Keuangan_model->get_by_id($id);

        if ($row) {
            $this->Keuangan_model->delete($id);
            $this->session->set_flashdata('message', 'Berhasil Hapus Data');
            redirect(site_url('keuangan'));
        } else {
            $this->session->set_flashdata('message', 'Data Tidak Ditemukan');
            redirect(site_url('keuangan'));
        }
    }

	public function _rules() 
    {
      $this->form_validation->set_rules('tanggal1', 'tanggal1', 'trim|required');
      $this->form_validation->set_rules('tanggal2', 'tanggal2', 'trim|required');
      $this->form_validation->set_rules('sumber_dana1', 'sumber_dana1', 'trim|required');
      $this->form_validation->set_rules('uraian1', 'uraian1', 'trim|required');
      $this->form_validation->set_rules('uraian2', 'uraian2', 'trim|required');
      $this->form_validation->set_rules('no_bukti_kas1', 'no_bukti_kas1', 'trim|required');
      $this->form_validation->set_rules('no_bukti_kas2', 'no_bukti_kas2', 'trim|required');
      $this->form_validation->set_rules('jml_pengeluaran', 'jml_pengeluaran', 'trim|required');
      $this->form_validation->set_rules('id', 'id', 'trim');
      $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
  }
}
