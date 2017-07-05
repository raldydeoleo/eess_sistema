<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Informes extends CI_Controller {
    public function __construct() {
        parent::__construct();
       // $this->load->library('form_validation');
    }

    public function index() {
        $data = array();
        $this->load->model('informe_model');
        $data['informes'] = $this->informe_model->obtener_todos();

        $this->load->view('informes/header');
        $this->load->view('informes/index', $data);
        $this->load->view('templates/footer');
    }

    public function ver($id){
        $data = array();
        $this->load->model('informe_model');
        $informe = $this->informe_model->obtener_por_id($id);
        $data['informe'] = $informe;
        $this->load->view('informes/header');
        $this->load->view('informes/ver', $data);
        $this->load->view('informes/footer');
    }
    public function guardar($id=null){
        $data = array();
        $this->load->model('informe_model');
        if($id){
            $informe = $this->informe_model->obtener_por_id($id);
            $data['id'] = $informe->id;
            $data['titulo'] = $informe->titulo;
            $data['descripcion'] = $informe->descripcion;
            $data['prioridad'] = $informe->prioridad;
        }else{
            $data['id'] = null;
            $data['titulo'] = null;
            $data['descripcion'] = null;
            $data['prioridad'] = null;

        }
        $this->load->view('informes/header');
        $this->load->view('informes/guardar', $data);
        $this->load->view('templates/footer');
    }
    public function guardar_post($id=null){
        if($this->input->post()){
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $prioridad = $this->input->post('prioridad');
            $this->load->model('informe_model');
            $this->informe_model->guardar($titulo, $descripcion, $prioridad, $id);

            $data['informes'] = $this->informe_model->obtener_todos();
            $this->load->view('informes/header');
            $this->load->view('informes/index', $data);
            $this->load->view('templates/footer');

        }else{
            $this->guardar();

        }
    }
    public function eliminar($id){
        $this->load->model('informe_model');
        $this->informe_model->eliminar($id);
        redirect('informes');
    }


}