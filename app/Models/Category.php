<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Astrotomic\Translatable\Translatable;
    use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

    class Category extends Model implements TranslatableContract
    {
        use HasFactory , Translatable;

        public $translatedAttributes = [ 'title' , 'content' ];

        protected $fillable = [
            'image' , 'parent' ,
        ];
    }
