<?php 
interface DataSourceInterface {
    public function getData(): array;
    public function getError(): ?string;
}
