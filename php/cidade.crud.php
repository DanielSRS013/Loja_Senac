<?php
    require_once('./conexao.php');
    
    
    function fnAddCidade($nomeCidade, $siglaUf)
    {
        $query = "insert into cidade(nome_cidade, sigla_uf) values ('{$nomeCidade}', '{$siglaUf}')";
        $link = getConnection();
        
        $result = mysqli_query($link, $query);

        mysqli_close($link); 

        if($result)
        {
            return true; 
        }
        return false;
    }

    
    function fnListaCidade()
    {
        $link = getConnection();
        $query = "select * from cidade";

        $result = mysqli_query($link, $query);

        $cidades = array();
        while($cidade = mysqli_fetch_assoc($result))
        {
            array_push($cidades, $cidade);
        }
        
        mysqli_close($link);
        return $cidades;
    }