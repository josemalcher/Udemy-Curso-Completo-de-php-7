<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            array(
                'nome_cargo'=>'Direto Comercial',
                'subordinados', array(
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                )
            ),
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados' => array(
                    array('nome_cargo'=>'supervisode de Pagamentos'
                    )
                )
            ),
            array(
                'nome_cargo'=>'gerente de compras',
                'subordinados' => array(
                    array(
                        'nome_cargo'=> 'Supervisor de suprimentos'
                    )
                )
            )
        )
    )
);

function exibe($cargos){
    $html = '<ul>';
        foreach ($cargos as $cargo){
            $html .= "<li>";
                $html .= $cargo['nome_cargo'];
                if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0){
                    $html .= exibe($cargo['subordinados']);
                }
            $html .= "</li>";
        }

    $html .= '</ul>';
    return $html;

}
echo exibe($hierarquia);