<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    public function insert(array $data)
    {
        $this->itemPrice = $data['itemPrice'];
        $this->itemName = $data['itemName'];
        $this->itemQnt = $data['itemQnt'];

        // Verificar o tipo de item (despesa ou ganho)
        if ($data['itemType'] === 'expense') {
            $this->itemPrice = -$this->itemPrice; // Definir valor como negativo para despesas
        }

        return $this->save();
    }
}
