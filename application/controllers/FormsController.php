<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormsController extends CI_Controller {
public function copy3(){
            $var1="";
            $var2="";
            if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
        }
        else {
            $var1="";
   }
   if(isset($_POST['submit'])){
       $radio=$_POST['letter'];
       if($radio=='lower'){
           $var2=strtolower($var1);
       }elseif($radio=='upper'){
           $var2=strtoupper($var1);
       }
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $this->load->view('forma1',$data);
	} 
        public function copy4(){
            $var1="";
            $var2="";
            if($this->input->post('text1')){
            $var1=$this->input->post('text1');
        }
        else {
            $var1="";
   }
   if($this->input->post('submit')){
       $radio=$this->input->post('letter');
       if($radio=='lower'){
           $var2=strtolower($var1);
       }elseif($radio=='upper'){
           $var2=strtoupper($var1);
       }
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $this->load->view('forma1',$data);
	} 
}
