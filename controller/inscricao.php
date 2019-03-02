<?php
    /**
     * Controller pra receber todos os dados da tela de inscricao
     * Utilizado procedimento estrutural
     * 
     * Verifica se o email já está cadastrado, caso não esteja, ele insere.
     * 
     * @author Guilherme Adriel
     * 
     * 
     * @return boolean O retorno desse controller é boolean ou vai retornar um erro e o codigo do erro
     */
    

    date_default_timezone_set('America/Sao_Paulo');
    require_once __DIR__ . "/../classes/autoload.php";

    $resp = new APIResponse;
    $conn = new Conexao;

    
    try{

        if($_POST){
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

            if( empty($email) )
                throw new Exception("Dados não preenchidos corretamente", 1);
            
            $qry = $conn->prepare("SELECT INC_EMAIL FROM inscricoes WHERE INC_EMAIL = :Email ");
            $qry->execute(array(
                ":Email"=> $email
            ));
            if($qry->rowCount() == 0){

                $stmt = $conn->prepare("INSERT INTO inscricoes (INC_EMAIL,
                                                            INC_DTCADASTRO)
                                            VALUES (  :Email, :DtCadastro)  ");
                $stmt->execute(array(
                    ":Email"      => $email,
                    ":DtCadastro" => date('Y-m-d H:i:s')
                ));

                if( $stmt->rowCount() > 0 ) // Verifica se a inserção deu certo
                    $resp->setData('valid', true);
                else 
                    throw new Exception("Não foi possível realizar a inclusão do registro", 999);

            }else{

                $resp->setData('valid', true);
            }
        }else{
            throw new Exception("Nenhum parâmetro de conexão foi enviada", 998);
        }

    }catch(Exception $e){
        $resp->setError($e->getMessage(), $e->getCode() );
    }

    $resp->send();