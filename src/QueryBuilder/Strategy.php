<?php

namespace SON\Db\QueryBuilder;

/*
 * Como essa interface cumpre o SOLID:
 * S: Cada arquivo tem a responsabilidade de definir suas particularidades de acordo com a interface
 * O: Quando precisar aumentar a quantidade de bancos suportados basta criar classes que implementem essa interface
 * L: A interface garante que os métodos serão implementados, tornando todas classes substituíveis umas pelas outras
 * I: Esta interface foi elaborada com todos requisitos exigidos para todas as classes que a implementem
 * D: A assinatura de métodos entre as classes que implementem Strategy sempre será a mesma
 */

interface Strategy
{
    public function table(string $table):Strategy;
    public function select($columns = '*'):Strategy;
    public function getQuery():string;
}

