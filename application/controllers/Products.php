<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Products_model');
    $this->load->model('Items_model');
    $this->load->model('Categories_model');
  }

  public function index()
  {
    $data = [
      'title' => 'Products',
      'content' => 'products/page',
      'products' => $this->Products_model->getProducts('products')
    ];
    $this->load->view('layout', $data);
  }

  public function insert()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Add Product',
        'content' => 'products/add',
        'items' => $this->Items_model->getItems('items'),
        'categories' => $this->Categories_model->getCategories('categories')
      ];
      $this->load->view('layout', $data);
    } else {
      $data = [
        'id_items' => $this->input->post('id_items', TRUE),
        'id_categories' => $this->input->post('id_categories', TRUE),
        'price' => $this->input->post('price', TRUE),
        'stock' => $this->input->post('stock', TRUE)
      ];
      $this->Products_model->input_data($data);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Product Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('products');
    }
  }

  public function update($id)
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title' => 'Update Product',
        'content' => 'products/edit',
        'items' => $this->Items_model->getItems('items'),
        'categories' => $this->Categories_model->getCategories('categories'),
        'products' => $this->Products_model->detail_data($id)
      ];
      $this->load->view('layout', $data);
    } else {
      $id = $this->input->post('id_products');
      $id_items = $this->input->post('id_items');
      $id_categories = $this->input->post('id_categories');
      $price = $this->input->post('price');
      $stock = $this->input->post('stock');

      $data = [
        'id_items' => $id_items,
        'id_categories' => $id_categories,
        'price' => $price,
        'stock' => $stock
      ];

      $where = [
        'id_products' => $id
      ];

      $this->Products_model->update_data($where, $data, 'products');
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-info alert-dismissible fade show" role="alert">
        Product Edited Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('products');
    }
  }

  public function delete($id)
  {
    $data['products'] = $this->Products_model->delete_data($id);
    if ($data['products'] == true) {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Product Deleted Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('products');
    } else {
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Product Can\'t Be Deleted
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
      );
      redirect('products');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules(
      'id_items',
      'name items',
      'required'
    );
    $this->form_validation->set_rules(
      'id_categories',
      'name categories',
      'required'
    );
    $this->form_validation->set_rules(
      'price',
      'price',
      'required'
    );
    $this->form_validation->set_rules(
      'stock',
      'stock',
      'required'
    );

    $this->form_validation->set_message('required', 'Please enter your %s');
  }
}
