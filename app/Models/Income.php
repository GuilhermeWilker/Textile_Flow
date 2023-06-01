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

        if ($data['itemType'] === 'expense') {
            $this->itemPrice = -$this->itemPrice; // Valor negativo
        }

        return $this->save();
    }
}
