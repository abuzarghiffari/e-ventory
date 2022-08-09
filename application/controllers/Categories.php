<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Categories_model');
  }

  public function index()
  {
    $data['title'] = 'Categories';
    $data['categories'] = $this->Categories_model->getCategories('categories');
    $this->load->view('categories/view-category', $data);
  }

  public function insert()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      //
    } else {
      $data = array(
        'code_categories' => $this->input->post('code_categories', TRUE),
        'name_categories' => $this->input->post('name_categories', TRUE)
      );
      $this->Categories_model->input_data($data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Category Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('categories');
    }
  }

  public function update()
  {
    $id = $this->input->post('id_categories', TRUE);
    $code_categories = $this->input->post('code_categories', TRUE);
    $name_categories = $this->input->post('name_categories', TRUE);

    $data = array(
      'code_categories' => $code_categories,
      'name_categories' => $name_categories,
    );

    $where = array(
      'id_categories' => $id
    );

    $this->Categories_model->update_data($where, $data, 'categories');
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Category Edited Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('categories');
  }

  public function delete($id)
  {
    $result = $this->Categories_model->delete_data($id);
    if ($result == true) {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Category Deleted Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('categories');
    } else {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Category Can\'t Be Deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('categories');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules(
      'code_categories',
      'code category',
      'required'
    );
    $this->form_validation->set_rules(
      'name_categories',
      'name category',
      'required'
    );

    $this->form_validation->set_message('required', 'Please enter your %s');
  }
}
