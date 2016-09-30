<?php

interface IConexao {
    const HOST= "10.10.117.50";
    const USUARIO ="cpa";
    const BASE = "cpa";
    const SENHA = "cpa";
    
    public function testar();
    public function conectar();
    public function desconectar();
}
