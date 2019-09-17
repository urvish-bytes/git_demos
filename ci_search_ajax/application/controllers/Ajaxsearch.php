<?php

class Ajaxsearch extends CI_Controller {

	public function index()
	{
		$this->load->view('ajaxsearch');
	}

	public function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('ajaxsearch_model');
		if($this->input->post('query')) {
			$query = $this->input->post('query');
		}

		$data = $this->ajaxsearch_model->fetch_data($query);
		$output .= '
		<div class="table-responsive">
					<table class="table table-bordered table-striped" style="text-align:center;">
						<tr>
							<th>Sr. No</th>
							<th>Title</th>
							<th>Content</th> 
							<th>Published On</th>
						</tr>
		';
		if($data->num_rows() > 0) {
			foreach($data->result() as $row)
			{	
				$output .= '
						<tr>
							<td>'.$row->id.'</td>
							<td>'.$row->title.'</td>
							<td>'.$row->body.'</td>
							<td>'.date('d-M-y, H:i:s A',strtotime($row->created_at)).'</td>
						</tr>
				';
			}
		} else {
			$output .= '<tr>
							<td colspan="5">No Data Found</td>
						</tr>';
		}
		$output .= '</table>';
		echo $output;
	}
	
}
