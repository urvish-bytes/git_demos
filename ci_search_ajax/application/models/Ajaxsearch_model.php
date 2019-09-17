<?
class Ajaxsearch_model extends CI_Model
{
	public function fetch_data($query)
	{
		$this->db->select("*");
		$this->db->from("articles");
		if($query != '')
		{
			$this->db->like('title', $query);
			$this->db->or_like('body', $query);
		}
		$this->db->order_by('id', 'ASC');
		return $this->db->get();
	}
}
?>