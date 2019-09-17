<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller 
{

	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common'); 
        $this->load->model('admin/Model_product'); 
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data(); 
		$data['product'] = $this->Model_product->show(); 

		$this->load->view('admin/view_header',$data); 
		$this->load->view('admin/view_product',$data); 
		$this->load->view('admin/view_footer'); 
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['add'])) 
		{
			$valid = 1;

			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('product_desc', 'Product Description', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }

	   		if($valid == 1)
		    {	
		    	$trimname = strip_tags(html_entity_decode($_POST['product_name']));
		    	// $trimhtml = strip_tags(htmlspecialchars_decode($_POST['product_desc']));
		    	$trimdesc = strip_tags(html_entity_decode($_POST['product_desc']));
		        $form_data = array(
					'product_name'  => $trimname,
					'product_desc'  => $trimdesc,
					'product_price' => $_POST['product_price']
	            );
	            $this->Model_product->add($form_data);

		        $success = 'Product is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/product');		        
		    } else {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/product/add');
		    }
        } else {
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_product_add',$data);
			$this->load->view('admin/view_footer');
        }
	}

	public function edit($id)
	{		
    	// If there is no Product in this id, then redirect
    	$tot = $this->Model_product->product_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/product');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';

		if(isset($_POST['edit'])) 
		{
			$valid = 1;

			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('product_desc', 'Product Description', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error = validation_errors();
            }
            
		    if($valid == 1) 
		    {
		    	$data['product'] = $this->Model_product->getData($id);
		    	$trimname = strip_tags(html_entity_decode($_POST['product_name']));
		    	// $trimhtml = strip_tags(htmlspecialchars_decode($_POST['product_desc']));
		    	$trimdesc = strip_tags(html_entity_decode($_POST['product_desc']));
	    		$form_data = array(
	    			'product_name' => $trimname,
	    			'product_desc' => $trimdesc,
	    			'product_price' => $_POST['product_price']
	            );
	            $this->Model_product->update($id,$form_data);
				
				$success = 'Product is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/product');
		    } else {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/product');
		    }
		} else {
			$data['product'] = $this->Model_product->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_product_edit',$data);
			$this->load->view('admin/view_footer');
		}
	}

	public function delete($id) 
	{
		// If there is no Product in this id, then redirect
    	$tot = $this->Model_product->product_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/product');
        	exit;
    	}

        $this->Model_product->delete($id);
        $success = 'Product is deleted successfully';
		$this->session->set_flashdata('success',$success);
		redirect(base_url().'admin/product');
    }    

}