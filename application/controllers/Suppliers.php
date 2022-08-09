<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suppliers extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Suppliers_model');
  }

  public function index()
  {
    $data = [
      'title' => 'Suppliers',
      'content' => 'suppliers/page',
      'suppliers' => $this->Suppliers_model->getSuppliers('suppliers')
    ];
    $this->load->view('layout', $data);
  }

  public function insert()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Create Supplier',
        'content' => 'suppliers/add',
      ];
      $this->load->view('layout', $data);
    } else {
      $data = array(
        'code_suppliers' => $this->input->post('code_suppliers', TRUE),
        'name_suppliers' => $this->input->post('name_suppliers', TRUE)
      );
      $this->Suppliers_model->input_data($data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Supplier Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('suppliers');
    }
  }

  public function update($id)
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Update Supplier',
        'content' => 'suppliers/edit',
        'suppliers' => $this->Suppliers_model->detail_data($id)
      ];
      return $this->load->view('layout', $data);
    } else {
      $id = $this->input->post('id_suppliers', TRUE);
      $code_suppliers = $this->input->post('code_suppliers', TRUE);
      $name_suppliers = $this->input->post('name_suppliers', TRUE);

      $data = [
        'code_suppliers' => $code_suppliers,
        'name_suppliers' => $name_suppliers,
      ];

      $where = [
        'id_suppliers' => $id
      ];

      $this->Suppliers_model->update_data($where, $data, 'suppliers');
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Supplier Edited Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('suppliers');
    }
  }

  public function delete($id)
  {
    $data['suppliers'] = $this->Suppliers_model->delete_data($id);
    if ($data['suppliers'] == true) {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Supplier Deleted Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('suppliers');
    } else {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Supplier Can\'t Be Deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('suppliers');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules(
      'code_suppliers',
      'code supplier',
      'required'
    );
    $this->form_validation->set_rules(
      'name_suppliers',
      'name supplier',
      'required'
    );

    $this->form_validation->set_message('required', 'Please enter your %s');
  }
}
