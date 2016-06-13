<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class pratos extends controller
{
    function pratos(){
    	$this->template->setTitle("Pratos");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');

		$pratosModel = new PratosModel();
        if($_POST){
        	$data[`pra_nome`] = $_POST[`nome`];
        	$data[`pra_descricao`] = $_POST[`descricao`];
        	//$data[`pra_data_insert`];
        	//$data[`pra_data_update`] = new DateTime(`now`);

        	if($_POST[`id`])
			$pratosModel->update($data, $_POST[`id`]);
			else
			$pratosModel->insere($data);
		}

    	$pratos = $pratosModel->getAll();

    	$this->smarty->assign('pratos', $pratos);
        $this->template->run();
        $this->smarty->display("admin/pratos.tpl");
    }

    function bebidas(){
    	$this->template->setTitle("Bebidas");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');

    	$bebidasModel = new BebidasModel();
        if($_POST){
        	$data[`beb_nome`] = $_POST[`nome`];
        	$data[`beb_descricao`] = $_POST[`descricao`];
        	//$data[`pra_data_insert`];
        	//$data[`pra_data_update`] = new DateTime(`now`);

			if($_POST[`id`])
			$bebidasModel->update($data, $_POST[`id`]);
			else
			$bebidasModel->insere($data);
		}

    	$bebidas = $bebidasModel->getAll();
    	$this->smarty->assign('bebidas', $bebidas);
        $this->template->run();
        $this->smarty->display("admin/bebidas.tpl");
    }

    function del_prato(){
    	$pra_id = $_POST['pra_id'];
    	$pratosModel = new PratosModel;
    	if($pratosModel->delete($pra_id)){
    		echo json_encode(array('type'=>'success'));die;
    	}
    	echo json_encode(array('type'=>'error'));die;
    }

    function del_bebidas(){
    	$beb_id = $_POST['beb_id'];
    	$bebidasModel = new BebidasModel;
    	if($bebidasModel->delete($beb_id)){
    		echo json_encode(array('type'=>'success'));die;
    	}
    	echo json_encode(array('type'=>'error'));die;
    }
}