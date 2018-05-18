<?php
namespace App\Http\Transformers;
use League\Fractal\TransformerAbstract;
use App\Http\Models\Book;

class TransformerBook extends TransformerAbstract
{
    public function transform(Book $field)
    {
        //ngubah format Tampilan di Postman
        return[
            'ID Buku' => $field->Id,
            'ID Kategori' => $field->category_id,
            'Judul Buku' => $field->title,
            'ISBN' => $field->isbn,
            'author' => $field->author,
            'page' => $field->page,
        ];
    }
}
