<?php 

$hierarquia = array(
   array(
        'nome_cargo'=>'CEO',
        'subordinado'=>array(
          //Inicio:Diretor Comercial
          array(
            'nome_cargo'=>'Diretor Comercial',
            'subordinado'=>array(
            	//Inicio:Gerente de vendas
                array(
                  'nome_cargo'=>'Gerente de vendas'
                )
                //termino:Gerente de vendas
            )
          ),
          //Termino:Diretor Comercial
          //Inicio:Diretor Financeiro 
          array(
             'nome_cargo'=>'Diretor Financeiro',
             'subordinado'=>array(
             	//Inicio:Gerente de Contas a pagar
             	array(
             		'nome_cargo'=>'Gerente de contas a pagar',
             		'subordinado'=>array(
             	//Inicio: Supervisior de Pagamentos
             	array(
             		'nome_cargo'=>'Supervisor de Pagamentos'
             	)	
             	//Termino:Supervisor de Pagemntos
                   
             		)

             	),
             	//Termino:Gerente de Contas a pagar
             	//Inicio: Gerente de Compras
             	array(
             		'nome_cargo'=>'Gerente de Compras',
             		'subordinado'=>array(
             			//Inicio: Supervisor de Suprimentos
             			array(
                         'nome_cargo'=>'Supervisor de Suprimentos',
                         'subordinado'=>array(

                         array(
                              'nome_cargo'=>'funcionario'
                         )

                         )
             		   )
                        //Termino: Supervisor de Suprimentos
             		)

             	)
             	//Termino: Gerente de Compras

             ) 

          )  
          //Termino:Diretor Financeiro
        )
   )
    

);

function exibe($cargos){

  $html = '<ul>';
   
  foreach ($cargos as $cargo) {
  	$html.= "<li>";

  	$html.= $cargo['nome_cargo'];

  	if(isset($cargo['subordinado']) && count($cargo['subordinado']) > 0){
     
     $html .=exibe($cargo['subordinado']);

  	}

  	$html.= "</li>";

  }

  $html.= "</ul>";

  return $html;

}

echo exibe($hierarquia);

 ?>