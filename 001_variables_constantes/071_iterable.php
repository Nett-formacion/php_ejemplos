<?php

function lista ():iterable{
    for ($n=0; $n<10;$n++)
        yield $n;
}

$lista = lista();
foreach ($lista as $item) {
    echo $item;
}

Class Persona implements Iterator
{
        private int $pos=0;
    public function __construct( public array $nombres)
    {

    }

    public function current(): mixed
    {
        return $this->nombres[$this->pos];
        // TODO: Implement current() method.
    }

    public function next(): void
    {
        $this->pos++;
        // TODO: Implement next() method
        //.
    }

    public function key(): mixed
    {
        return $this->pos;

        // TODO: Implement key() method.
    }

    public function valid(): bool
    {
        return isset ($this->nombres[$this->pos]);
        // TODO: Implement valid() method.
    }

    public function rewind(): void
    {
        $this->pos=0;
        // TODO: Implement rewind() method.
    }
}

$personas = new Persona (['luis','PEdro','María']);

foreach ($personas as $key => $nombre)
    echo "Persona $key : $nombre";
