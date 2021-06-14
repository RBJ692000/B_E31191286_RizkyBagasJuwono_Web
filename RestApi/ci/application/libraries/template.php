<?php
 class Template {
 protected $_ci;
function __construct() {
$this->_ci = &get_instance(); 
}
 function views($template = NULL, $data = NULL) {
if ($template != NULL) {

// memanggil file head.php dari folder Admin/_Template/
$data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, 
TRUE);
 
// memanggil file topbar.php dari folder Admin/_Template/
$data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, 
TRUE);

// memanggil file sidebar.php dari folder Admin/_Template/
$data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', 
$data, TRUE);

// ['konten'] data yang kita panggil dari file content.php dari folderAdmin/_Template/
 $data['konten'] = $this->_ci->load->view($template, $data, TRUE);
 
// memanggil file content.php dari folder Admin/_Template/
$data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, 
TRUE);

// memanggil file footer.php dari folder Admin/_Template/
$data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);
 
// menampilkan file Template.php dari folder Admin/_Template/
echo $data['Template']= $this->_ci->load->view('Admin/_Template/Template',$data, TRUE); }}}?>