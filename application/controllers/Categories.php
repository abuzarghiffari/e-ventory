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
    $data = [
      'title' => 'Category',
      'content' => 'categories/page',
      'categories' => $this->Categories_model->getCategories('categories')
    ];
    $this->load->view('layout', $data);
  }

  public function insert()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Create Category',
        'content' => 'categories/add',
      ];
      $this->load->view('layout', $data);
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

  public function update($id)
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Update Category',
        'content' => 'categories/edit',
        'categories' => $this->Categories_model->detail_data($id)
      ];
      return $this->load->view('layout', $data);
    } else {
      $id = $this->input->post('id_categories', TRUE);
      $code_categories = $this->input->post('code_categories', TRUE);
      $name_categories = $this->input->post('name_categories', TRUE);

      $data = [
        'code_categories' => $code_categories,
        'name_categories' => $name_categories,
      ];

      $where = [
        'id_categories' => $id
      ];

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
  }

  public function delete($id)
  {
    $data['categories'] = $this->Categories_model->delete_data($id);
    if ($data['categories'] == true) {
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
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Category Can\'t Be Deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('categories');
    }
  }

  public function print()
  {
    $data = [
      'title' => 'Print Category',
      'categories' => $this->Categories_model->getCategories('categories')
    ];
    $this->load->view('categories/print', $data);
  }

  private function _rules()
  {
    $this->form_validation->set_rules(
      'code_categories',
      'code category',
      'required|max_length[15]'
    );
    $this->form_validation->set_rules(
      'name_categories',
      'name category',
      'required|max_length[15]'
    );

    $this->form_validation->set_message('required', 'Please enter your %s');
  }
}
